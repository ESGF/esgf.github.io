---
layout: default
title: ESGF Compute Release Announcement
---

## ESGF Compute Release Announcement

The ESGF Compute Working Team is pleased to announce the completion of its first Compute Challenge, 
As you might know, ESGF is moving toward a model where users are offered the possibility of pre-processing data on ESGF servers before downloading it to their local machine. The CWT has defined a restricted set of functionalities “subset” and “aggregate” services. Different implementations of these services are available on different nodes, and ideally they would run with netCDF files or DAP links hosted on a wide variety of platforms and return.

The WPS API is described at: [https://docs.google.com/document/d/16G9oXjqqCTCpqf6wA3vnFjoF-lR3kT03m4Q9dndx5Bw/edit](https://docs.google.com/document/d/16G9oXjqqCTCpqf6wA3vnFjoF-lR3kT03m4Q9dndx5Bw/edit)

The compute Python API is available at: [https://github.com/esgf/esgf-compute-api](https://github.com/esgf/esgf-compute-api) or via conda with:
```
conda create -n cwt -c cdat -c conda-forge esgf-compute-api=2.2.0
```
We recommend you get familiar with it by following the notebook at: [https://github.com/ESGF/esgf-compute-api/blob/master/examples/getting_started.ipynb](https://github.com/ESGF/esgf-compute-api/blob/master/examples/getting_started.ipynb)

A set of F.A.Q.s is also available at: [https://github.com/ESGF/esgf-compute-wps/blob/devel/FAQ.md](https://github.com/ESGF/esgf-compute-wps/blob/devel/FAQ.md)

ESGF compute services are now available for production at: [https://aims.llnl.gov](https://aims.llnl.gov).

This node offers the following services: 
 * Aggregate
 * Subset
 * Min/Max
 * Regrid
 * Add/Subtract
 * Sum
 * Workflow (to chain these together)
 * More operator will come online with time and will be announced.

NASA provides some services at: [https://www.nccs.nasa.gov/services/analytics/EDAS](https://www.nccs.nasa.gov/services/analytics/EDAS). Due to NASA security process this is still based on an older version and is not compatible with CWT API. A newer, compatible, release is ready and awaiting clearance from NASA’s security review. It is expected to replace the current one as soon it is cleared, probably in early September.

CMCC’s Ophidia-based WPS will be compatible with ESGF API as well and should be ready for alpha testing soon, with full release to the public in September/October.

Finally, if you are interested in deploying you own compute services we recommend you try our ready-to-deploy container-based solution at: [https://github.com/esgf/esgf-compute-wps](https://github.com/esgf/esgf-compute-wps)
