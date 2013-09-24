---
layout: releases_sidebar
title: Release v1.2
---

## ESGF Release Version 1.2

####v1.2.0 (released: Bensonhurst)
* **Security**:
  - Improved access control for TDS-based OpenDAP access
  - Support for registering in groups with non-automatic approval
  - Upgraded Yadis discovery service to conform to service identifiers as defined in the ESGF security ICD
* **Search**:
  - Implementation of ESGF search API as agreed upon by Search Interface Working Group
  - Securing of publishing/un-publishing operations via the ESGF security framework (calls to Authorization Service and Policy Service, Registry Service, Attribute Service)
  - REST-like API for generation of download scripts, across the whole federation, for an arbitrary set of DRS parameters
  - Support of publishing and searching of replicas, both from the scripting REST endpoint, and the web portal interactive UI.
  - Improved RSS notification feeds: dataset-level and file-level, node-specific and federation-wide, and customizable to arbitrary search parameters
* **Web User Interface**:
  - Improved search query syntax
  - Generation of wget scripts spanning multiple P2P Nodes
  - Improved selection of files in data cart
  - Integrated LAS computation service

---
####v1.2.1 (staged)
* **Security**:
  - ORP: support for configuration of additional trusted [IdPs][idps] from static white list file.
* **Search**:
  - Dynamic configuration of shards for distributed search from file /esg/config/esgf-shards.xml, continuously updated by the local node manager.
  - Support for returning results in JSON format.
  - Support for requesting the logical OR of two values of the same facet (example: variable=hus&variable=ta)
  - Improved wget script for file retrieval over HTTP.
  - Support for fault tolerance in distributed searches, re-attempting a non-distributed search.
  - Detecting replica nature of THREDDS catalogs from embedded "is_replica" flag.
  - Avoid stopping the harvesting process when single THREDDS catalogs generate parsing errors.
  - Support for negative facet syntax (example: model=!CCSM)

---
####v1.2.2 (in test - ready to be staged)
* **Search**:
  - Improvements in search speed when querying for datasets, and adding them to the data cart
  - Allowing seamless harvesting of new search facets from THREDDS catalogs into the Solr index, and easy configuration in the web UI.
  - Replication support
  - Version support
  - Enabled searching files by tracking_id and checksum
* **Security**:
  - Use of dynamically generated files for service endpoints (attribute service and registration service), and policy statements.
  - Web front end:
  - Performance enhancement by using of dynamic sharding
  - Several bug fixes and UI improvements
  - OpenDAP access point support
* **Other**:
  - Globus Toolkit upgrade (both ['MyProxy'][myproxy] and 'GridFTP')
  - Cleaner installation process

---
####v1.2.3 (in development and testing)
* **Web front end**:
  - Technotes Support
  - CIM (Metafor) Metadata Interface integration
  - Standard Names in facets
  - Improved Web Front End workflow
  - Change of user interaction metaphor
* **Search**:
  - ESGF Shell - search mode
  - Faster Query return
  - Data Retrieval:
  - GridFTP / Globus Online
  - DML integration
  - BDM integration (in replication context)
  - OpenDAP
* **Other**:
  - Tighter UV-CDAT integration
  - ESGF Client Toolkit.
  - Ability to install old versions of Node
  - Ability to run installer using off board database
  - LAS multi-dataset support

  ---

[myproxy]: http://www.esgf.org/wiki/MyProxy
[idps]: http://www.esgf.org/wiki/IdPs
