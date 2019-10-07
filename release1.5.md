---
layout: releases_sidebar
title: Release v1.5
---

## ESGF Release Version 1.5.0 (Brower Park)

Date: April 2013

Notes : If you are **upgrading** your node please issue the following commands:

    % esg-node stop

Perform whatever backups that will give you solace in a fubar situation.  Possible directories you may wish to backup: /esg/config, /usr/local/tomcat (w/o log files), /user/local/tomcat/conf/, /etc/esgf.env

FYI: The esg-node tool will backup /user/local/tomcat/conf during the migration process. (next)

    % esg-node --check u
    % esg-node --migrate-tomcat-credentials-to-esgf
    % esg-node --install

**For IDP nodes only**: Once the node is up you need to run the following query to "approve" your current accounts: (this is a ONE TIME ONLY step, for those UPGRADING)

    %> source /etc/esg.env
    %> psql -U dbsuper esgcet
    psql (8.4.7)
    Type "help" for help.

    esgcet=# update esgf_security.permission set approved='t';

done

#### Functionality | Features | Fixes

* **esgf-installer**: version 1.5.0 (aka the node version)
  - new node maintenance flags
  - new sanity checking flags
  - Upgrade java to 1.6.0 45 (security fix release)
  - tomcat authorization/certificate files moved to $ESGF_HOME/config/tomcat
* **esgf-node-manager**: version 0.6.14
  - SSL P2P protocol support
  - New registry entries for dashboard support.
* **esg-security**: version 2.3.8
  - Enhancement: user permissions retrieved from the database must have the 'approved' flag set to true
  - Tickets:
    - [https://github.com/ESGF/esgf-security/issues?milestone=1&state=closed][issue1]
    - [https://github.com/ESGF/esgf-security/issues?milestone=2&state=closed][issue2s]
* **esgf-orp**: version 2.3.1
  - Bug Fix: include log4j jar in war file, which disappeared after recent changes to build process
  - Tickets:
    - [https://github.com/ESGF/esg-orp/issues?milestone=2&state=closed][issue2o]
* **esgf-idp**: version 2.4.1
  - New Functionality: prototype RESTful service for retrieving user certificate (if MyProxy port cannot be reached)
  - Bug fix: fixed Chrome problem related to mixing secure and unsecure content (now all content loaded through https)
  - Tickets:
    - [https://github.com/ESGF/esgf-idp/issues?milestone=2&state=closed][issue2i]
    - [https://github.com/ESGF/esgf-idp/issues?milestone=3&state=closed][issue3]
* **esg-search**: version 3.7.2
  - New Functionality: first version of next generation ESGF publishing services, supporting push+pull operations, HTTP RESTful endpoints, and schema validation
  - New Functionality: skeleton framework for enabling index-level access control for publishing Obs4MIPS datasets (as controlled by the configuration file /esg/config/esgf-publisher-resources/security/esgf_project_restrictions.xml)
  - Configuration changes: more RAM available to Lucene Indexer, and longer Poll interval for Solr slaves
  - Tickets:
    - [https://github.com/ESGF/esg-search/issues?milestone=4&state=closed][issue4]
    - [https://github.com/ESGF/esg-search/issues?milestone=5&state=closed][issue5]
    - [https://github.com/ESGF/esg-search/issues?milestone=6&state=closed][issue6]
* **esgf-web-fe**: version 2.4.0
  - Bug fix: fixed problem affecting Chrome users trying to create an account, related to mix secure and un-secure content within the same page
  - Bug fix: enforcing HTTPS for login page
* **esgf-dashboard**: version 1.3.3
  - Information provider extensions to compute the aggregated data usage statistics ( plan B )
  - Information provider extensions to support the federated data usage statistics ( plan B )
  - Information provider extensions for realtime monitoring (cpu, ram, swap)
  - Information provider extensions to support external identity providers for the "registered number of users" metric
  - Information provider extensions to support peer groups in/out from the federation
* **esgf-desktop**: version 0.0.3
  - New multimedia module
  - New cpu realtime module
  - New ram realtime module
  - New swap realtime module
  - New statistics module ( plan B ) with local metrics
  - Small improvements (logout removed, RSS feed fixed)
* **Other**:
  - LAS: version 8.1

---

#### Known issues and trouble shooting tips

###### When also installing the COMPUTE node type, bash exceeds mem limit for vars

     Enter the name of the directory containing the 
     'fer_executables.tar.gz file. 
     'fer_executables.tar.gz' is not in /usr/local/ferret
     
     Enter the name of the directory containing the 
     'fer_executables.tar.gz file. 
     '' is not a directory
     
     Enter the name of the directory containing the 
     'fer_executables.tar.gz file. 
     Renaming (by appending '.old') any existing files in /usr/local/ferret 
         that will be replaced by files in /usr/local/src/esgf/workbench/esg/ferret/8.1/fer_executables.tar.gz 
     Extracting files from /usr/local/src/esgf/workbench/esg/ferret/8.1/fer_executables.tar.gz 
                        to /usr/local/ferret 
     
     Enter your choice:
     (1) Install executables, (2) Customize ferret_paths files, (3) Exit
     
     Enter your choice:
     (1) Install executables, (2) Customize ferret_paths files, (3) Exit
    /usr/local/bin/esg-product-server: line 397: /bin/date: Argument list too long
    /usr/local/bin/esg-functions: line 519: /bin/sort: Argument list too long
    /usr/local/bin/esg-functions: line 519: /usr/bin/tac: Argument list too long
    /usr/local/bin/esg-functions: line 519: /bin/awk: Argument list too long
    Ferret Installed :-)
    init_las...
    /usr/local/bin/esg-product-server: line 409: /bin/awk: Argument list too long
    las_tar_url = ftp://ftp.pmel.noaa.gov/pub/las/las-esgf-v8.1.tar.gz
    las_dist_file = las-esgf-v8.1.tar.gz
    las_dir = /usr/local/
    Checking for LAS Product Server v8.1 Web Application "las" is not present or cannot be detected!
    
    *******************************
    Setting up LAS Product Server...
    *******************************
    
    Getting LAS...
    Don't see LAS tar file las-esgf-v8.1.tar.gz
    Downloading LAS from las-esgf-v8.1.tar.gz -to-> /usr/local/src/esgf/workbench/esg/ferret/8.1/las-esgf-v8.1.tar.gz
    wget -O 'las-esgf-v8.1.tar.gz' 'ftp://ftp.pmel.noaa.gov/pub/las/las-esgf-v8.1.tar.gz'
    /usr/local/bin/esg-product-server: line 425: /usr/bin/wget: Argument list too long
     ERROR: Could not download LAS:las-esgf-v8.1.tar.gz
    
    Sorry...
    This action did not complete successfully
    Please re-run this task until successful before continuing further
    
    Also please review the installation FAQ it may assist you
    https://github.com/ESGF/esgf.github.io/wiki/ESGFNode|FAQ
    
    
    Sorry...
    This action did not complete successfully
    Please re-run this task until successful before continuing further
    
    Also please review the installation FAQ it may assist you
    https://github.com/ESGF/esgf.github.io/wiki/ESGFNode|FAQ

When this happens, re-run the installer. The second time around there are fewer vars added and thus we stay under the limit and are able to complete the full install. This is a known issue of the installation that we are looking into. To avoid getting this error, perform a COMPUTE + (other) install in two steps. First, an install NOT including COMPUTE. Then perform an install again including, this time including COMPUTE. We will work on fixing this properly in a subsequent release.

##### Thredds server complains about not being able to "re-init"

    ...
    Enter lines, or <RETURN> to end
    Add new line: 
    INFO       2013-05-01 09:58:33,740 Reinitializing THREDDS server
    ERROR      2013-05-01 09:58:33,742 Error reading url https://localhost:443/thredds/admin/debug?catalogs/reinit: URLError(error(111, 'Connection refused'),)
    Got the error: ESGPublishError("Error reinitializing the THREDDS Data Server: URLError(error(111, 'Connection refused'),)",)
    Check that the username/password and reinitialization URLs are correct.
    Script exited.
    ...

This is a tell tale sign that the SSL certificates were not set up appropriately. To solve this: re-add the ssl credentials:

    %> esg-node --install-ssl-keypair

This will regenerate the keystore and rebuild the truststore. If you are upgrading (i.e. you already have a previously fully formed esg.ini file), then you are done. If you are installing the publisher for the first time, then there is still the "--publish" phase that needs to be completed in order to properly write the esg.ini file. You may do so by running the setup directly:

    %> source /etc/esg.env
    %> $CDAT_HOME/bin/esgsetup --thredds --publish 

##### Upon startup, at the end of the installation process you see...

Setting Index Peer... to => [pcmdi.llnl.gov] (endpoint type = p2p)
Installing Public Certificate of Target Peer Node...[pcmdi.llnl.gov]

    Oo.:-)
    [FAIL] Could not access private keystore /esg/config/tomcat/keystore-tomcat (re-run --add-my-cert-to-truststore)
    :-(
    Sync'ing /esg/config/tomcat/esg-truststore.ts with /usr/local/java/jre/lib/security/jssecacerts ... [OK]
    :-)
    https://pcmdi.llnl.gov/esg-search/remote/secure/client-cert/hessian/publishingService

This is a symptom of the same cause as the previous issue. The output directs you as to the remedy.

    %> esg-node --add-my-cert-to-truststore

The difference between this solution and the previous is that this solution will NOT regenerate your keystore, you will have to know the proper password for it. The previous solution will regenerate the keystore where you SET the keystore password. If you don't know your keystore password, or wish to change it by regenerating it do the previous entry's solution - this means that you have a valid keypair in your /esg/config/tomcat directory.

##### non-compute data node install fails with missing las_servers.xml

There is an issue here where the failure to find the las_servers.xml file prevents thredds from being operational. The short fix is to create (touch) the missing file. This is the [solution implemented in v1.6.0][issue11], currently under development.   

One thing to notice here is that the script detects if you have the publisher configured to perform local LAS computation, if so then it will go ahead and install LAS on the node as well (currently the central part of the COMPUTE node type) - even if you have not selected explicitly to install a COMPUTE node type. This solution stems from issues where nodes where stood up under the DATA type but configured in the publisher for providing LAS services which lead to dead LAS links.

    ...
    sanity_check_for_hints_todo_compute() {
        debug_print "checking for compute hints..."
        local default_answer="n"
        local answer
        if $(sed -n '/las_configure[ ]*=[ ]*true/p' ${esg_root_dir}/config/esgcet/esg.ini 2> /dev/null | grep -q true); then
            echo "Detected that the publisher configuration indicates LAS functionality is needed."
            default_answer="Y"
            read -e -t 120 -p " Would you like to install the \"COMPUTE\" configuration to support this ? $([ ${default_answer} = "Y" ] && echo "[Y/n]" || echo "[y/N]")" answer
            [ -z "${answer}" ] && answer=$(tr 'A-Z' 'a-z' <<< ${default_answer})
            if [ "${answer}" != "y" ] && [ "${answer}" != "yes" ]; then
                echo "Will NOT install \"COMPUTE\" configuration..."
                return 1
            else
                echo "User wants \"COMPUTE\" node type to also be installed"
                return 0
            fi
        else
            echo "No compute configuration hints found.... continuing..."
            return 2
        fi
        return 3
    }
    ...
     #Do a quick check to see if the compute bit should be turned on.... If so then turn on that switch and keep going...
            if [ $((sel & INSTALL_BIT)) != 0 ] && [ $((sel & COMPUTE_BIT)) == 0 ] && sanity_check_for_hints_todo_compute; then
                ((sel+=COMPUTE_BIT))
            fi
    ...

---


### ESGF Release Version 1.5.0-2 (Brower Park)

(small but necessary modifications posted to production)

#### Functionality | Features | Fixes

* **esgf-web-fe**: version 2.4.1
  - **Admin page**
    - Manage Users now only shows 25 and has a flip through options like the search page
    - Manage Users now has the loading spinner so you know its loading when being slow
    - Manage Groups now has the loading spinner ...
    - User Role Group Manipulation now takes a username instead of displaying all users
    - User Role Group Manipulation has the loading spinner ...
    - User Role Group Manipulation no longer keeps loading groups every time you click it
    - Pending Request works as is as long as idp nodes have run the update query (see step 3 in 1.5.0 Notes)
  - **Account Page**
    - Only loads local groups on first visit
    - When a users slicks Show All Registered the loading icon is displayed until all groups are loaded
  - **Login Page**
    - Forgot password no longer has a hard coded from sender email, instead reads the admins email from esgf.properties

[issue1]: https://github.com/ESGF/esgf-security/issues?milestone=1&state=closed
[issue2s]: https://github.com/ESGF/esgf-security/issues?milestone=2&state=closed
[issue2o]: https://github.com/ESGF/esg-orp/issues?milestone=2&state=closed
[issue2i]: https://github.com/ESGF/esgf-idp/issues?milestone=2&state=closed
[issue3]: https://github.com/ESGF/esgf-idp/issues?milestone=3&state=closed
[issue4]: https://github.com/ESGF/esg-search/issues?milestone=4&state=closed
[issue5]: https://github.com/ESGF/esg-search/issues?milestone=5&state=closed
[issue6]: https://github.com/ESGF/esg-search/issues?milestone=6&state=closed
[issue11]: https://github.com/ESGF/esgf-installer/issues/11
