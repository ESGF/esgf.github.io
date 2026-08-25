# IDP Proxy User Sign In and Registration

The ESGF IDP Proxy functions as a general identity provider for all ESGF sites. Though it does not directly provide password-based login or account registation, it does act as a gateway to other identity providers that users can sign up to and login with.

This document will outline the user management facilities provided by Keycloak, as well as some of the common use-cases that we are supporting.

### Actors

- **Keycloak:**
  Keycloak is an identity management server written in Java. Its documentation can be found [here](https://www.keycloak.org/documentation).
- **Relying Party (RP):**
  An OAuth 2.0 Client application that requires user authentication and claims from an Identity Provider. Relying Parties must register themselves with an Identity Provider to allow this interaction.
- **Identity Provider (IDP)**
  This is a trusted source of authority on user identity which communicates with a Relying Party using the OAuth 2.0 protocol.
- **IDP Proxy:**
  This is a Keycloak server acting as the central identity management service for ESGF. While it facilitates login for ESGF users, it does not allow registration. Instead acting as proxy to multiple Local IDPs (hence "IDP Proxy") which provide it with user identities. This gives it access to all users in the federation, allowing it to be the Identity Provider for all ESGF applications.
- **ESGF site-specific IDP:**
  This is a Keycloak server installed on a node at an ESGF site and acting as an Identity Provider. It would be appropriately branded and provide login and registration for users at that site.
- **Third-party IDP:**
  An Identity Provider not managed by ESGF but which could be hooked up to the IDP Proxy to provide additional login options for "homeless" users. e.g. GitHub, Google Plus, etc.
- **External IDP:**
  Any IDP being relied on to provide an identity. e.g. A third-party or ESGF site-specific IDP.

## Keycloak Functionality Overview

Except where specified, the information in this section applies to both the ESGF IDP Proxy and site-specific ESGF IDP Keycloak servers.

### Themes

All Keycloak view templates can be edited or overridden with a custom theme. This allows for full customisation of the look-and-feel of Keycloak, as well as the content of each page.

The IDP Proxy uses an ESGF styled theme to override much of the content of the default Keycloak views. For instance, it does not allow user's to login with a username and password. Instead, they authenticate with another ESGF IDP or with a third-party IDP. Site-specific ESGF IDPs retain the standard Keycloak functionality but alter the appearance with CSS.

### Registration

This is the process by which a visitor to the Keycloak server can enter their personal details to generate an account in a Keycloak server's database. Registration, by default, prompts for the following information:

- First name (required)
- Last name (required)
- Email (required, unique)
- Username (required, unique) - Only if “Email as username” is not enabled.
- Password (required)

The registration form contents can be modified in the relevant theme template. Additional information about the user can be requested this way by adding custom fields mapped to *user attributes* (explained in the next section).

User registration is disabled on the IDP Proxy. Instead, a user record is created in the database when a user authenticates via an external IDP. The fields for this user are populated from their OIDC profile.

### User Accounts

Account information is stored as a row in the Keycloak database’s user table.

  - Each row in the user table of the database is automatically assigned a randomly generated unique ID, a realm ID, a timestamp, etc.
  - Passwords are stored in a separate table.
  - If an IDP is used to authenticate, a new user account is created. A many-to-many linking table is used to associate users with IDPs.
  - If the “Email as username” realm option is enabled, the user’s username field will match their email address.
  - When a new user authenticates with an external IDP, a row will be created in the user database from the `preferred_username`, `email`, `given_name` and `family_name` attributes of the OIDC ID token / UserInfo response.

*User attributes* can be used to associate additional information with an account.

  - Attributes are arbitrary key/value pairs stored in their own table in the database and associated with users by ID.
  - Attribute values can be provided to a relying party by adding them to a scope.

Keycloak has a profile page, which users can access to change their account details. This also applies to federated users at the IDP Proxy, who would be able to alter their account details to be different to those of their home IDP.

## Case 1: New User Registration and Login

When a new user arrives at the IDP Proxy, they will be presented with a selection of IDPs. They will have two options:

1. Sign in with a third party IDP such as GitHub, Google Plus, etc.

    - Selecting one of these providers will send them to the third party site's login page where they will be able to login with an existing account or create a new a account to login with. The external IDP will then communicate their account information to the IDP Proxy using OIDC, completing their registration and login at the IDP Proxy.

2. Sign in with one of the available site-specific ESGF IDPs such as LLNL, CEDA, etc.

    - The user will be redirected to the login page of their chosen site's customised Keycloak IDP, where they will be able to register a new account (as detailed in the above section) and login. Their information will then be communicated with the IDP Proxy using OIDC, completing their registration and login at the IDP Proxy.

Once an approved IDP has been used to register and authenticate at the IDP Proxy, the user's authenticated status and saved details can be passed on to a relying ESGF web application or service to complete their login.

## Case 2: Legacy User Password Reset

Users that had an account at an ESGF institution before the migration to Keycloak should be familiar with the available site-specific IDPs shown at the IDP Proxy login screen.

However, once they are directed to their chosen IDP, they will not be able to login using their old password. This is because the ESGF user database migration did not transfer ESGF user passwords. Therefore, legacy users will have to reset their password at their organisation's Keycloak IDP before they can login.

After they have reset their password and logged in, their old details will be saved to the IDP Proxy and authentication will be complete.

## Case 3: Login with multiple IDPs

There will be situations where users who have authenticated with one IDP in the past attempt to authenticate with a second IDP. Since the IDP Proxy creates a user record in its database when somebody first logs in, there must be a way to determine that a new user with the same email address or username as an existing user is the same person as that user.

Fortunately, this is a fairly ordinary scenario for sites with external IDP providers, and Keycloak's solution should is quite simple: If either the `username` or the `email address` of a newly authenticated user matches that of user already in the database, the IDP Proxy will give you two options:

1. Link the new user account with the one in the database.

    - This will redirect you back to the login page, where it expects you to log in to the proxy with the account that has the conflicting details (which may be the username or the email address, but only the one prompted for matters). Once logged in, that account will be associated with your new IDP, in addition to any others it might have been linked to. User details of the account are unchanged.

    - As implied by the above, in the scenario where the details of a user on two IDPs are different (e.g. a user with different usernames per organisation but the same email address, or vice versa) the proxy will only store the relevant details of the first account to authenticate.

2. Change your email/username on the proxy

    - The proxy will let you change the details of your “new” proxy account before it is created. In other words, you will be able to change the username or email address to something that doesn’t conflict with an account already present on the proxy.

    - If the proxy is using the “Email as username” realm option, then the above flow will ignore “preferred_username” and simply use the user’s email address instead. With this enabled, account linking functions the same as described above, but without needing to compare usernames.
