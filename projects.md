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

## ESGF Node Projects

The ESGF Node is the central project.  It is an amalgam of several
sub-projects and external software components and libraries to create a single
Data Node artifact capable of searching, sharing and posting large amounts of
metadata.  


### publisher

##### [Source][ESGF/esg-publisher], [Issues][ESGF/esg-publisher/issues], [Wiki][ESGF/esg-publisher/wiki]

<img src="{{site.url}}/media/images/publisher.png" class="project-icon">

* Harvests, publishes, replicates and maintains meta data.
* Primary feature component for performing meta data harvesting, publishing
and maintenance. Features pluggable handler design architecture for multi
data format support.


---

### Compute

##### [Source][ESGF/esgf-cwt], [Issues][ESGF/esgf-cwt/issues]

<img src="{{site.url}}/media/images/compute.png" class="project-icon">

* The ESGF Compute Node is a common installation like the Data Node
* Deployed through recipes to enable server-side processing as an alternative to file download
* Built upon OGC Web Processing Service (WPS) for standards-compliance and interoperability
* Leveraging work from international activities to deliver robust subsetting and more advanced processing capabilities
* Scalable deployment on a range of architectures
* Reliant on large unit test coverage to support maintainability and product-readiness
  
---


[ESGF/esg-publisher]:            https://github.com/ESGF/esg-publisher
[ESGF/esg-publisher/issues]:     https://github.com/ESGF/esg-publisher/issues
[ESGF/esg-publisher/wiki]:       https://github.com/ESGF/esg-publisher/wiki


[ESGF/esgf-cwt]:                  https://github.com/ESGF/esgf-cwt
[ESGF/esgf-cwt/issues]:           https://github.com/ESGF/esgf-cwt/issues

