---
layout: default
title: Software
---

## Welcome to ESGF Software and Services

The [Earth System Grid Federation](http://esgf.llnl.gov/) (ESGF) is a collaboration that develops, deploys and maintains software infrastructure for the management, dissemination, and analysis of model output and observational data. Below are the different data access interfaces and software tools. You can install and configure all the tools or a subset depending on your needs. 

### For Data Users - Search Data
* Metagrid Beta Release (Web UI): <https://aims2.llnl.gov/>
* LLNL Data site (CoG Web UI): <https://esgf-node.llnl.gov/projects/esgf-llnl/>
* [ESGF User Guide and FAQ](https://esgf.github.io/esgf-user-support)
    * Includes information on operation of the CoG frontend, wget script and Globus downloads
* [Search API Documentation](https://esgf.github.io/esg-search)
    * For direct access to search on ESGF using http-based tools.
* Getting help:
    * <https://esgf.github.io/esgf-user-support/faq.html#how-to-contact-us>

### ESGF Software Stack: for the Node Administrator
#### *ESGF Data and Index/Identity Node*
* **Description:**
    * The ESGF Data Node software stack enables sites hosting earth system data to make it available to the community over several transfer protocols including http(s).  Index nodes enable search for hosted data via data publishing to the index, and these nodes include a search API and web frontend.  Identity nodes manage user accounts.  All these services together consitute a "Full" ESGF installation. These nodes run as Docker containers and can be deployed via Ansible Playbooks or Helm Charts in a Kubernetes environment.
* **Use case:**
    * I want to install a data and/or index/IdP node software stack using the current architecture
    * I want to upgrade my existing node software stack to the latest supported service versions
* **New and returning installations:**
    * Regardless of whether you have installed and administered an ESGF node previously, please read the following document on ESGF policies, as this should influence what type of installation you should do:
        * <http://esgf.llnl.gov/media/pdf/ESGF-Policies-and-Guidelines-V1.0.pdf>
        * <https://esgf.llnl.gov/esgf-media/pdf/ESGF-Tier1and2-NodeSiteRequirements-V5.pdf>
            * describes suggested requirements under “Tier 2 sites” section.
* Requirements, Setup and Usage documentation
        * <https://esgf.github.io/esgf-ansible/intro/intro.html>
* **Basic Prerequisite:**
    * The ESGF software stack requires Linux RedHat Enterprise or Rocky/Alma distributions and administrators have full sudo privileges to root access
    or a Kubernetes Cluster
    * The services are meant to run on webserver-grade hardware.  For data nodes, storage holding your data to share must be mounted on the node.
* **Main page: includes installation instructions**
    * <https://github.com/ESGF/esgf-docker/>
* **Issues:**
    * <https://github.com/ESGF/esgf-docker/issues>
* **Installation email list:**
    * <esgf_iwt@llnl.gov>


#### Metagrid User Interface

* **Description**
    * **Metagrid** is the upcoming Web UI release that will replace the *legacy* CoG UI
* **Use case**
    * I want to install my own Metagrid deployment
* Documentation site:  <https://metagrid.readthedocs.io/en/latest/>
* Git Repo: <https://github.com/aims-group/metagrid>



### ESGF data publisher
#### *ESG publisher (esg-publisher)*

* **Description:**
    * The ESG Publisher (esgcet python package) enables data publishers to push references of their data on their site’s data node to an ESGF Index for use in search and retrieval
* **Use Cases:**
    * I want to publish a new dataset to ESGF
    * I want to update an existing dataset that I published on ESGF
    * I want to retract/delete a dataset that I published from ESGF 
* **Main Page: (user documentation)**
    * <https://esg-publisher.readthedocs.io/>
=* **Prerequisite:**
    * Publishers to ESGF must have an existing Data Node installed at their site. 
    * The publisher software (as of v5.x) does not need to run on the Data Node, but requires a "Data mount" so the software can access data files.  
* **Issues:**
    * <https://github.com/ESGF/esg-publisher/issues>
* **Publication working team mailing list:**
    * <esgf-pwt@llnl.gov>

**For Data Preparation**, our collaborators at IPSL provide the [Pre-publication Tools](https://esgf.github.io/esgf-prepare) for a number of ongoing ESGF data projects.  

### ESGF Compute
* **Description:**  
    * The ESGF Compute Node software stack (known as `roocs`) enables sites hosting earth system data to deploy a _compute_ service next to the data.
    * The Compute Node is built on the OGC Web Processing Service standard to describe a common interface for specifying _remote processsing_.
    * The Node includes a complete backend stack which can be installed on a single or cluster of servers, deployed through an Ansible Playbook.
    * The primary aim of the Node is to enable server-side processing to reduce the global network traffic of ESGF data and enable greater access to these essential scientific data.
* **Use Cases**
    * I want to retrieve a subset of the data.
    * I want to execute compute operations on data using remote resources.
* **Main Page:**
    * <https://github.com/ESGF/esgf-cwt> 
* **Installation:** 
    * <https://github.com/ESGF/esgf-cwt> (in preparation)
* **Documentation:** 
    * [`roocs` documentation](https://roocs.github.io/)
    * [`rooki` python client](https://rooki.readthedocs.io/en/latest/)
    * [Example Jupyter Notebooks](https://rooki.readthedocs.io/en/latest/notebooks/index.html)
* **Support:**
    * Github Issues: <https://github.com/ESGF/esgf-cwt/issues>

### Misc software and documentation
#### *CMIP6 administrators and publishers*
PCMDI has produced the Data Node Managers guide for CMIP6 data specifically here: <https://pcmdi.llnl.gov/CMIP6/Guide/dataManagers.html> 

#### *ESGF bulk data download tools*
* <https://esgf.github.io/esgf-download/> From IPSL, esgpull / esgf-download combines an automated download service to manage massive replica copies of ESGF datasets, suited for server administrators to operate and a "thick client" for users to perform downloads to individual systems and user accounts.
