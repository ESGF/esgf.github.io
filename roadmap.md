---
layout: releases_sidebar 
title: Road Map 
---

[tomcat]: http://tomcat.apache.org/download-70.cgi
[java]: http://www.oracle.com/technetwork/java/javase/downloads/index.html
[macjava]: http://docs.oracle.com/javase/7/docs/webnotes/install/mac/mac-jdk.html
[thredds]: http://www.unidata.ucar.edu/projects/THREDDS/tech/TDS.html
[javascript]: https://github.com/ESGF/esgf.github.io/wiki/JavaScript
[uread]: http://uread.llnl.gov/

##ESGF Developer Release Roadmap
This page is a **sketch** of things that intended to be done for the next few releases. **no guarantees**

* v1.5.0 (April 30, 2013) [Brower Park]
* v1.6.0 (~late June) [Bushwick]
  - Upgrade Tomcat to 7.0.39 [download site][tomcat]
  - Upgrade Java 1.7x (Java SE 7u21) [ [download site][java] | [mac os x][macjava] ]
  - Upgrade Thredds to 4.3 [thredds overview][thredds]
  - Enable additional Thredds capabilities via web.xml (Sebastien's web.xml mods)
  - Using python 2.7
  - Using the UV-CDAT codebase (as opposed to cdat that we are currently using)
  - publisher update to use UV-CDAT libraries under python 2.7
  - Federated metrics / statistics
* v1.7.0 (~mid July) [Canarsie]
  - Re-implementation of core node-manager engine
  - Updated node-manager; communication update: no longer using hessian, instead using RESTful rpc calls.
  - UV-CDAT install to include entire UV-CDAT compute suite of libraries/tools (no gui)
  - Clean separation between WEB-FE backend and web/presentation layers
  - URL-Addressable search results in the front end
  - HPSS
  - Unit testing - Expanding test coverage
  - Documentation overhaul -> wiki, web page
* v1.8.0 (~mid July) [Cross Island Expressway]
  - Revamped Globus install and configuration using RPMs
* v2.0.0 (~early September) [Carroll Gardens]
  - updated registration.xml schema (will NOT be backward compatible)
  - virtual machine packaging and configuration (no more install scripts as primary install method)
  - virtual machine cluster "master" offering (tentative)
  - Full RESTful apis for all modules
    - Restful APIs documented (color coordinated and formatted and posted on website)
  - ESGF Shell (demonstrable client using APIs - Provided as exemple of the use of all RESTful APIs)
  - Documentation!!!!!!
* v2.1.0 (~late October) [Clinton Hill]
  - Client-side APIs for calling all esgf services in Python, Java(/Clojure), [JavaScript][javascript]
  - Compute cluster offering: ESGF's Cloud-in-a-box
  - Compute Job Submission service.
  - Enhanced ESGF Shell
  - Computation Toolbox (see: U-ReAD [http://uread.llnl.gov/][uread])
    - Handful of most used algorithms
  - Separate all services to sit on separate ports - (jetty, http-kit)
    - Construct SSL termination and reverse proxy manager service)
* v2.2.0 (~early 2014)
  - Cross cluster computing.
  - Smart Caching

---
(free form issue scratch space: below)

---

###ToDos

This is a rough staging area for things that need to be done. It is meant as a parking lot for the dev group as we set up, assign and prioritize these items. This list should be roughly three releases in scope. With the plan to have announced releases in roughly three to four week intervals, though continuously releasing point releases as features are tested and ready.

* Apply search criteria to the files that are returned under a dataset!
* Provide a single uber script for the entire contents of the data cart!
* Provide a testing framework for front end services (both service layer and script layer)
* Implement commonly agreed search API
  * Revisit harvesting of dataset URLs, allow for datasets that are only accessible via OpenDAP or other services, i.e. no files!
* Provide customization capabilities for web frontend, starting with the home page
* Allow publishing in-context of technical notes and other documentation, together with the datasets
* Add support for CIM metadata feeds, probably linking to the CIM portal at this time
* Help pages
* Documentation (User and Developer's Guides)
* Fix support for datasets that contain many (> 300) files
* Improve facet sidebar (appearance, caching, etc)
* Install try/catch functionality for front end external dependencies (google maps, CIM, etc)
* HTML5 storage clear upon login/logout (done 5-2)
* Dynamic lookup of functional nodes in registry
* IE8 Compatibility
* Clean up the admin UI
    * Refactor/test code
    * Add individual group administrators (instead of only root admin)
    * Editable forms in the accounts page
    * Administrative options - display/hide elements in the front end, editable properties files (facets, views, srm, etc), editable policies list
* Datacart persistence
* GO integration
* Email Notification
* User Migration Tool
* ESGF Shell replication support BDM & GO
* ESGF Shell search support
* ESGF Shell support quoted strings as args (ex 'CMIP5 Research')
* Data cart 'just in time' file query fetching
* Registry integration for whilelists (Ex attribute/registration service endpoints)
* GO end-user download
* BDM replication
* Modify wget script to use variables to set the location of certificates - such that users may set them when calling it.
* Use Estani's more sophisticated script with checkpointing, if viable.
* Integrate web-fe with Metafor RSS feed
* Address why the JPA is a part of the web-fe codebase - it's necessity and weigh pros/cons
* Front-end support for "badges" above the footer. (good to force a pixel height here for uniformity)
* Replication Tab
* Add "Replicate" link next to "Add To Cart" et. al.
* Add "Replicate" tab for administrator
* Add "Visualization" tab for multi-dataset comparison in LAS and/or UV-CDAT
* RESTify the front end services
  1. URL Addressable search results in the front end
  2. URL Addressable data cart results in the front end
  3. URL Addressable visualization results in the front end
* User annotation of search results and/or visualizations
* Make web-fe more of a framework for tabs to be "loaded" based on what modules are available and what access rights you have.
  * We use the web-fe for all installs but different capabilities are available.
    1. Ex: Only index nodes have a "search" button.
    2. Ex: IDP nodes have "user administration" features
    3. Ex: Data and Compute notes present "Replication" and "Dashboard" tabs for admins
* Allow web front end to be started without the whole postgres database machinery in the back, for rapid development and testing - i.e. it must have less dependencies.
* Search needs to return not just the datasets but also all the replicated locations of the dataset - this must be displayed by the UI in the data cart. This is very useful when constructing the download scripts - so that we can take advantage of pulling from multiple locations simultaneously!!! :-).
* DRS URL to resource decoupling
* SRM v1.0 release (ORNL use only)
    * Bestman and Axis in installation script
    * ORNL Bestman plugin and PyHPSS script in installation script
    * Tomcat CLASSPATH revision in installation script
    * Wget and globus url copy scripts included with email responses
    * SRM Front end mechanism for dynamic caching
* SRM v2.0 release (Generalized use)

###Done
* Add commit point in the version or as a separate entry in META-INF/MANIFEST
