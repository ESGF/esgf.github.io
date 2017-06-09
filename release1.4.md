---
layout: releases_sidebar 
title: Release v1.4
---

## ESGF Release Version 1.4 (Brighton Beach)

#### v1.4.0 (Brighton Beach)

Date: August 2012

* **Node Manager**
  - Support for P2P Protocol over SSH
  - P2P Protocol improved convergence time
  - Included classes for reporting statistics on P2P protocol and search results
* **Search**
  - Support for **Aggregations**:
    - New Solr core "aggregations" is installed
    - When harvesting THREDDS catalogs, aggregations at all levels are harvested and ingested into the new core
    - The search API was extended to allow query for object of type=Aggregation
  - **RSS** bug fix: remove default=NOW for timestamp field, which effectively made the RSS fields useless because the oldest datasets (with no date) showed up as the newest records
  - Support for **super-nodes** - nodes that maintain a local copy of remote shards
    - On each node, the traditional Solr slave instance now becomes also a master, so it can be replicated on demand by other servers
    - The installer supports installation of replica shards on demand
  - The search back-end is configured via a locally maintained file **/esg/config/facets.properties** which contains a list of all the facets used by the local Index Node
  - The maximum number of files limit per wget script is increased to 1000
  - Updated to **Solr 3.6** release
* **Security**
  - Implemented back-end **federated attribute service** that can query all attribute services in the federation to retrieve all attributes for a given user. Not exposed directly as web service, rather intended to be used as service layer by the web user interface.
  - Federation certs loaded on startup.
* **Web Front End**
  - Improved data cart behavior, faster response
  - Lock widget prevents user from issuing simultaneous queries
  - Bug fixes
* **wget script** (see ESGF wget for more detailed info)
  - renew certificate automatically if it was retrieved by the script the first time
  - directory generation for downloaded files (download_structure and download_emptypath wget API modifications)
wrong published checksum check
  - download file modification check (report if remote file was modified, i.e. checksum changed, if downloading latest it will report if there's a new version available)
  - added "update" option (-u) to compare the wget script with the latest version of itself and redownload if different (preserving old one, that is). This enables the previous option of reporting changed files.
  - file list overflow check and report message to user (if files in the script are less than the ones returned by the query)
  - wget version check
* **Dashboard/Desktop**(new)
  - data usage statistics management at node level (back-end).
  - statistics aggregator at federation level (back-end)
  - new Desktop interface (Rssfeed viewer, management console, data usage statistics, twitter and dashboard gadgets)
* **Other**
  - Updated Thredds server to 4.2.10, which should greatly improved the internal memory management.

##### Release Instructions and Notes

* The format of the file **/esg/config/facets.properties** has changed to support additional functionality. If you have a local version of that file, move it somewhere else prior to running the installer, so that a new version can be copied in place (which you can later customize).
* The location of the Solr index data has changed to **/esg/solr-index**. The installer will automatically copy the old Solr indexes for master and slave into the new location.
* **Thredds Data Server**
  - Because of a change in how the TDS application is being versioned, you must remove the current TDS installation for the installer to pick up the new version:
    - **mv /usr/local/tomcat/webapps/thredds /tmp/.**
  - Optionally, you can turn caching off in the file **/esg/content/thredds/threddsConfig.xml** - it's not yet clear wether this will improve memory usage or not:
    - \<Catalog\>\<cache\>false\</cache\>\</Catalog\>
* **"Super-Node" configuration.**
  - After updating to this release, an Index Node administrator has the option of creating a local replica of any other up-to-date Index Node, and configure the search services to query the local replica shard, as opposed to the remote shard. For example, to create and query a local replica of the JPL Index Node (which is up to date), using port 8985:
  - **esg-node --add-replica-shard** esg-datanode.jpl.nasa.gov:8985
  - esg-node --list-shards (should show the local master and slave shards, plus any additional replica shards)
  - esg-node --check-shards (lists the configured shards and tests the integrity of the configuration)
  - esg-node (re)start

Note that every replica shard will run in a separate Jetty container, on a dedicated port: 8985, 8986, 8987, etc...
Also, when adding a replica the port value is optional. If one is not supplied the next 'free' port is used. However when deleting a replica shard run --list-shards first and specify the hostname and the port (hostname:port). Use; esg-node **--list-shards**, (view the shard you wish to remove) then, esg-node **--remove-replica-shard** \<shard to remove hostname\>:\<port\>

---

#### v1.4.2 (Brooklyn Heights)

Date: December 2012

* esgf-installer: version 1.4.2
new node maintenance flags
new sanity checking flags
* esgf-node-manager: version 0.6.14
SSL P2P protocol support
New registry entries for dashboard support.
* esg-security: version 2.2.5
* esgf-orp: version 2.3.0
Bug fix: Chrome users not able to register for CMIP5 membership because Chrome does not load insecure content (http) within a secure page (https). Solved by serving YUI libraries from Google CDN (ajax.googleapis.com) instead of YUI site (yui.yahooapis.com) since only the first allows connections via HTTPS.
* esgf-idp: version 2.3.0
Big fix: fixed Chrome problem related to mixing secure and unsecure content (now all content loaded through https)
* esg-search: version 3.6.0
Enhancement: provide top-level summary of dataset access points ([https://github.com/ESGF/esg-search/issues/1][issue1])
Bug fix: harvest geospatial and temporal information into top-level dataset ([https://github.com/ESGF/esg-search/issues/2][issue2])
* esgf-web-fe: version 2.3.2
Bug fix: fixed problem affecting Chrome users trying to create an account, related to mix secure and un-secure content within the same page
Bug fix: enforcing HTTPS for login page
* esgf-dashboard: version 1.3.1
* esgf-desktop: version 0.0.1

---

[issue1]: https://github.com/ESGF/esg-search/issues/1
[issue2]: https://github.com/ESGF/esg-search/issues/2
