---
layout: default
title: Projects
---

<style>
  ul {
    margin-left: 95px;
  }
  ul ul {
    margin: 0 0 0 45px;
  }
  hr, h4 {
    margin-top: 55px;
  }
  h5 {
    margin-top: -15px;
  }
  img.project-icon {
    height: 70px;
    border: none;
    float: left;
    height: 70px;
    width: 70px;
  }
</style>

## ESGF P2P Node Projects

The ESGF P2P Node is the central project.  It is an amalgam of several
sub-projects and external software components and libraries to create a single
Data Node artifact capable of searching, sharing and posting large amounts of
metadata.

### installer

##### [Source][ESGF/esgf-installer], [Issues][ESGF/esgf-installer/issues], [Wiki][ESGF/esgf-installer/wiki]

<img src="{{site.url}}/media/images/installer.jpg" class="project-icon">

* Build, install, configure and maintain the ESGF Node.

---

### node-manager

##### [Source][ESGF/esgf-node-manager], [Issues][ESGF/esgf-node-manager/issues], [Wiki][ESGF/esgf-node-manager/wiki]

<img src="{{site.url}}/media/images/node-manager.png" class="project-icon">

* Central component for managing constituent *components* and overall inter
and intra node activity.
* The node manager provides the framework for the coordination and management of the various components that comprise the ESGF Node.
* coordination, monitoring, metrics, notification, routing, discovery, etc

#### esgf-shell

<img src="{{site.url}}/media/images/esgf-shell.jpg" class="project-icon">

* The shell provides an interactive commandline *(REPL)* environment from which
the user can manipulate the node and take advantage of node features.
* Use the esgf shell (esgf-sh) as a command line alternative interface into all
the features of the ESGF Node. Write your own custom commands in Java, Clojure,
Scala, Groovy and/or BeanShell. The shell provides familiar shell features and
full set of commands to let you take advantage of the simple power of the
command line.
* The esgf shell provides a simple shell and command line interface to the
node's services. Users can use the shell to perform any of the tasks that may
be performed through the web user interface. To help end users leverage the
shell to it's maximum the shell provides the ability for end-users to develop
custom shell commands. Commands can be written in Java, Closure, Scala,
Jython, Groovy, or BeanShell. Through custom commands end-users have a direct
mechanism for extending the node features and creating new ones!
* Power, simplicity, flexibility, extensibility, etc.

---

### dashboard

##### [Source][ESGF/esgf-dashboard], [Issues][ESGF/esgf-dashboard/issues], [Wiki][ESGF/esgf-dashboard/wiki]

<img src="{{site.url}}/media/images/dashboard.png" class="project-icon">

* Federation level monitoring tool. The dashboard and the node manager enjoy a
symbiotic relationship as they both participate in federation level
activities.  Different from the node manager's role the dashboard monitors
nodes once they are discovered and join the federation. The dashboard
maintains historical information, whereas the node manager is primarily
interested in keeping federation data up to date and in sync. The dashboard
has a 'back-end' written and a quite attractive :-) front-end displaying not
only node participation but node location as well!

---

### desktop

##### [Source][ESGF/esgf-desktop], [Issues][ESGF/esgf-desktop/issues], [Wiki][ESGF/esgf-desktop/wiki]

<img src="{{site.url}}/media/images/desktop.png" class="project-icon">

* Federation level desktop
* The ESGF Desktop extends the functionalities provided by the data node
adding an intuitive interface to back-end esgf node "monitoring" statistics
and information - using the desktop metaphor. It extends the data node by
providing a back-end monitoring system and a front-end user interface
for monitoring purposes.

---

### publisher

##### [Source][ESGF/esg-publisher], [Issues][ESGF/esg-publisher/issues], [Wiki][ESGF/esg-publisher/wiki]

<img src="{{site.url}}/media/images/publisher.png" class="project-icon">

* Harvests, publishes, replicates and maintains meta data.
* Primary feature component for performing meta data harvesting, publishing
and maintenance. Features pluggable handler design architecture for multi
data format support.

---

### idp

##### [Source][ESGF/esgf-idp], [Issues][ESGF/esgf-idp/issues], [Wiki][ESGF/esgf-idp/wiki]

<img src="{{site.url}}/media/images/idp.jpg" class="project-icon">

* The identity provider in the ESGF SSO federation as well as account management
and access control system. Also including a web-based interface for site
administrators.
* Identity Provider and User Manager
* Where users are managed and identities kept.
* identity, security, naming, access, people
* Identity Provider and User Manager
* Where users are managed and identities kept.
* identity, security, naming, access, people

---

### orp

##### [Source][ESGF/esgf-orp], [Issues][ESGF/esgf-orp/issues], [Wiki][ESGF/esgf-orp/wiki]

<img src="{{site.url}}/media/images/orp.png" class="project-icon">

* The OpenID Relying Party - relays end-users to their home organization's IDP
(identity provider) for secure login and connection to *local* resources
* OpenID relying party
* Provides the federation of nodes the ability to have single sign-on, with
OpenID support.
* Single sign-on

---

### security

##### [Source][ESGF/esgf-security], [Issues][ESGF/esgf-security/issues], [Wiki][ESGF/esgf-security/wiki]

<img src="{{site.url}}/media/images/security.png" class="project-icon">

* Security infrastructure for nodes and federation.
* Security infrastructure protecting data integrity and access on each node and
across the federation.

---

### search

##### [Source][ESGF/esgf-search], [Issues][ESGF/esgf-search/issues], [Wiki][ESGF/esgf-search/wiki]

<img src="{{site.url}}/media/images/search.png" class="project-icon">

* Search mechanism that supports search across entire corpus of ever-changing
published metadata.
* The ESGF search module contains the next generation search functionality for
the Earth System Grid Federation, built upon the Apache Solr search engine. The
package contains functionality for:
  * Publishing and unpublishing search metadata records into and from a Solr
  server. Metadata records are generated by harvesting a remote metadata source
  (a hierarchy of THREDDS catalogs, a OAI repository, a CAS metadata catalog).
  * Searching the Solr engine content via a free text, faceted search or a
  geo-spatial and temporal search.

---

### drslib

##### [Source][ESGF/esgf-drslib], [Issues][ESGF/esgf-drslib/issues], [Wiki][ESGF/esgf-drslib/wiki]

<img src="{{site.url}}/media/images/drslib.png" class="project-icon">

* Set of libraries for handling the DRS taxonomy that model data adheres to.

---

### stager

##### [Source][ESGF/esgf-stager], [Issues][ESGF/esgf-stager/issues], [Wiki][ESGF/esgf-stager/wiki]

<img src="{{site.url}}/media/images/stager.png" class="project-icon">

* A system for connecting to and retrieving data from back-end deep storage
archives.
* The Stager provides the means to transparently access files located at a
remote system. Remote files are cached locally preserving the directory
structure from the remote structure.
* Implementation
    * The current implementation uses a Java web Filter for intercepting the file
    requests targeted at servlets running locally. These calls are handled
    differently depending on the user-agent attribute from the http request
    header.
        * If the request was started from within a browser, the user is redirected
        to a "waiting page" from where it will be automatically redirected to the
        original servlet when the file is ready.
        * In case the request was started by a tool, the request will just block
        until the file is available.
    * The file retrieval will be triggered only once and in cache the file is
    already in the cache the filter will return	immediately allowing the call to
    proceed normally without any delay. This call is logged to optimize the
    cache-cleaning mechanism.

---

### web-fe

##### [Source][ESGF/esgf-web-fe], [Issues][ESGF/esgf-web-fe/issues], [Wiki][ESGF/esgf-web-fe/wiki]

<img src="{{site.url}}/media/images/web-fe.png" class="project-icon">

* The web front-end to the federation.  Interface to fasceted search and other services.

---

### fetcher

##### [Source][ESGF/esgf-fetcher], [Issues][ESGF/esgf-fetcher/issues], [Wiki][ESGF/esgf-fetcher/wiki]

<img src="{{site.url}}/media/images/fetcher.jpg" class="project-icon">

* Download published datasets and stay up-to-date.
* Fetching and keeping updated with ESGF Published data.
* Fast, Secure and Easy
* Stay Tuned... - Work in progress
* The ESGF Fetcher leverages the ESGF security mechanisms (esgf-security) and
provides fast and secure HTTP file downloads. It also maintains and updates
downloaded files with its built-in "broadcatching" capabilities. The fetcher has
a secured RESTful interface as its control channel and provides a web and esgf
shell (esgf-sh) command line interface. The Fetcher is a stand alone service
that may be run on any host without any other dependencies.

---

### toolbox

##### [Source][ESGF/esgf-toolbox], [Issues][ESGF/esgf-fetcher/issues], [Wiki][ESGF/esgf-toolbox/wiki]

<img src="{{site.url}}/media/images/toolbox.jpg" class="project-icon">

* Algorithms and tools to help you wrangle your data.
* The Premiere Toolbox of computation algorithms
* Big Data -> Big Computation -> Big Analytics... No Problem
* Stay Tuned... - Work in progress
* The ESGF Toolbox is a collection of algorithms written in Java, Scala, Clojure
and Python that leverages ESGF Compute Tools' "Big Data" infrastructure to
perform computation, analytics and querying over ESGF datasets.

[ESGF/esgf-dashboard]:            https://github.com/ESGF/esgf-dashboard
[ESGF/esgf-dashboard/site]:       http://esgf.org/esgf-dashboard/
[ESGF/esgf-dashboard/issues]:     https://github.com/ESGF/esgf-dashboard/issues
[ESGF/esgf-dashboard/wiki]:       https://github.com/ESGF/esgf-dashboard/wiki

[ESGF/esgf-desktop]:              https://github.com/ESGF/esgf-desktop
[ESGF/esgf-desktop/issues]:       https://github.com/ESGF/esgf-desktop/issues
[ESGF/esgf-desktop/wiki]:         https://github.com/ESGF/esgf-desktop/wiki

[ESGF/esgf-drslib]:               https://github.com/ESGF/esgf-drslib
[ESGF/esgf-drslib/issues]:        https://github.com/ESGF/esgf-drslib/issues
[ESGF/esgf-drslib/wiki]:          https://github.com/ESGF/esgf-drslib/wiki

[ESGF/esgf-fetcher]:              https://github.com/ESGF/esgf-fetcher
[ESGF/esgf-fetcher/issues]:       https://github.com/ESGF/esgf-fetcher/issues
[ESGF/esgf-fetcher/wiki]:         https://github.com/ESGF/esgf-fetcher/wiki

[ESGF/esgf-idp]:                  https://github.com/ESGF/esgf-idp
[ESGF/esgf-idp/issues]:           https://github.com/ESGF/esgf-idp/issues
[ESGF/esgf-idp/wiki]:             https://github.com/ESGF/esgf-idp/wiki

[ESGF/esgf-installer]:            https://github.com/ESGF/esgf-installer
[ESGF/esgf-installer/issues]:     https://github.com/ESGF/esgf-installer/issues
[ESGF/esgf-installer/wiki]:       https://github.com/ESGF/esgf-installer/wiki

[ESGF/esgf-node-manager]:         https://github.com/ESGF/esgf-node-manager
[ESGF/esgf-node-manager/issues]:  https://github.com/ESGF/esgf-node-manager/issues
[ESGF/esgf-node-manager/wiki]:    https://github.com/ESGF/esgf-node-manager/wiki

[ESGF/esgf-orp]:                  https://github.com/ESGF/esgf-orp
[ESGF/esgf-orp/issues]:           https://github.com/ESGF/esgf-orp/issues
[ESGF/esgf-orp/wiki]:             https://github.com/ESGF/esgf-orp/wiki

[ESGF/esg-publisher]:            https://github.com/ESGF/esg-publisher
[ESGF/esg-publisher/issues]:     https://github.com/ESGF/esg-publisher/issues
[ESGF/esg-publisher/wiki]:       https://github.com/ESGF/esg-publisher/wiki

[ESGF/esgf-search]:               https://github.com/ESGF/esgf-search
[ESGF/esgf-search/issues]:        https://github.com/ESGF/esgf-search/issues
[ESGF/esgf-search/wiki]:          https://github.com/ESGF/esgf-search/wiki

[ESGF/esgf-security]:             https://github.com/ESGF/esgf-security
[ESGF/esgf-security/issues]:      https://github.com/ESGF/esgf-security/issues
[ESGF/esgf-security/wiki]:        https://github.com/ESGF/esgf-security/wiki

[ESGF/esgf-shell]:                https://github.com/ESGF/esgf-shell
[ESGF/esgf-shell/issues]:         https://github.com/ESGF/esgf-shell/issues
[ESGF/esgf-shell/wiki]:           https://github.com/ESGF/esgf-shell/wiki

[ESGF/esgf-stager]:               https://github.com/ESGF/esgf-stager
[ESGF/esgf-stager/issues]:        https://github.com/ESGF/esgf-stager/issues
[ESGF/esgf-stager/wiki]:          https://github.com/ESGF/esgf-stager/wiki

[ESGF/esgf-toolbox]:              https://github.com/ESGF/esgf-toolbox
[ESGF/esgf-toolbox/issues]:       https://github.com/ESGF/esgf-toolbox/issues
[ESGF/esgf-toolbox/wiki]:         https://github.com/ESGF/esgf-toolbox/wiki

[ESGF/esgf-web-fe]:               https://github.com/ESGF/esgf-web-fe
[ESGF/esgf-web-fe/issues]:        https://github.com/ESGF/esgf-web-fe/issues
[ESGF/esgf-web-fe/wiki]:          https://github.com/ESGF/esgf-web-fe/wiki
