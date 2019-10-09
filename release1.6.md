---
layout: releases_sidebar
title: Releases
---

## ESGF Node Current Release

#### v1.6.2-bushwick_myrtle-release (Bushwick/Myrtle, Brooklyn)

The embodiment of the node application stack is indeed the [installation script][esgf-script] ([downlad][esgf-download]). The script automates the installation process installing the node's application stack in a predictable and uniform way.  This allows for better maintenance and ease of upgrade. The script is written in bash and has a number of features.  Though, one could install these components individually on one's own.  It is **HIGHLY** recommended to use the script for all installation and update needs.  Learn more about the script, it's flags and features [here][flags-featres].

The ESGF Node, as discussed on the [node][esgf-node] page, is an amalgam of software components that work in concert to perform the higher level tasks of the Node.  The Node is a collection of components developed by the members of the [ESGF][esgf-home] open source effort as well as external tools and libraries that provide support for the ESGF Node feature set. A list of ESGF P2P Node functionality is posted [here][wiki-functions].

---

### Installation Quick Notes

    % esg-node --check u
    % esg-node --install

The best and recommended way to install and setup the Node is to first visit the [installation page][rainbow-dist] and read the short preparation [how to][rainbow-howto] document and then download and run the [bootstrap script][rainbow-bootstrap] onto the target machine.  The bootstrap script downloads the installation script that in-turn installs and configures all the ESGF Node components, culminating in a functioning Node instance that is able to scan, index, publish, share and monitor your data.

---

### Features & Functionality

<table cellspacing="1" cellpadding="1" border="0">
  <tr bgcolor="#eaeaea"><td> Feature </td><td>&nbsp;&nbsp;Installed&nbsp;&nbsp;</td><td>&nbsp;&nbsp;Tested&nbsp;&nbsp;</td></tr>
  <tr bgcolor="#ffffff"><td> publication </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#eaeaea"><td> data scan </td><td><center><img src="media/images/checkbox_on.png"></center> </td><td> <center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#ffffff"><td> drs support </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#eaeaea"><td> token access </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#ffffff"><td> token-less access</td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#eaeaea"><td> http download </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#ffffff"><td> pki </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#eaeaea"><td> gridftp (end-user)</td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#ffffff"><td> gridftp  (bdm)</td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#eaeaea"><td> replication </td><td><center><img src="media/images/checkbox.png"></center></td><td><center><img src="media/images/checkbox.png"></center></td></tr>
  <tr bgcolor="#ffffff"><td> search </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#eaeaea"><td> attribute service </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#ffffff"><td> identity provider </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#eaeaea"><td> registration service </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#ffffff"><td> esgf shell </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#eaeaea"><td> dashboard service </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#ffffff"><td> esgf desktop </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
  <tr bgcolor="#eaeaea"><td> index replication </td><td><center><img src="media/images/checkbox_on.png"></center></td><td><center><img src="media/images/checkbox_on.png"></center></td></tr>
</table>

### Node Component Versions:

<table cellspacing="1" cellpadding="1" border="0">
  <tr bgcolor="#eaeaea"><td> Project </td><td> Version / Tag&nbsp;&nbsp;</td><td> Home Site </td></tr>
  <tr bgcolor="#ffffff"><td> node-manager&nbsp;&nbsp;</td><td> v0.6.19 (db [1])</td><td> <a href="https://github.com/ESGF/esgf-node-manager">https://github.com/ESGF/esgf-node-manager</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> publisher </td><td> v2.11.1 </td><td> <a href="https://github.com/ESGF/esg-publisher">https://github.com/ESGF/esg-publisher</a> </td></tr>
  <tr bgcolor="#ffffff"><td> orp </td><td> v2.3.8 </td><td> <a href="https://github.com/ESGF/esg-orp">https://github.com/ESGF/esg-orp</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> security </td><td> v2.4.0 (db [2]) </td><td> <a href="https://github.com/ESGF/esgf-security">https://github.com/ESGF/esgf-security</a> </td></tr>
  <tr bgcolor="#ffffff"><td> search </td><td> v3.7.8 </td><td> <a href="https://github.com/ESGF/esg-search">https://github.com/ESGF/esg-search</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> idp </td><td> v2.4.4 </td><td> <a href="https://github.com/ESGF/esgf-idp">https://github.com/ESGF/esgf-idp</a> </td></tr>
  <tr bgcolor="#ffffff"><td> web-fe </td><td> v2.4.10 </td><td> <a href="https://github.com/ESGF/esgf-web-fe">https://github.com/ESGF/esgf-web-fe</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> dashboard </td><td> v1.3.7 (db [5])</td><td> <a href="https://github.com/ESGF/esgf-dashboard">https://github.com/ESGF/esgf-dashboard</a> </td></tr>
  <tr bgcolor="#ffffff"><td> desktop</td><td> v0.0.5 </td><td> http://esgf.org/esgf-desktop</td></tr>
</table>

### External Application Stack Versions

<table cellspacing="1" cellpadding="1" border="0">
  <tr bgcolor="#eaeaea"><td> Application </td><td> Version / Tag </td><td> Home Site </td></tr>
  <tr bgcolor="#ffffff"><td> ant </td><td> v1.9.1 </td><td>   <a href="http://ant.apache.org/" target="rel">http://ant.apache.org/</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> cdat </td><td> v1.4.0 </td><td> <a href="http://uv-cdat.llnl.gov/" target="rel">http://uv-cdat.llnl.gov/</a> </td></tr>
  <tr bgcolor="#ffffff"><td> curl </td><td> v7.20.1 </td><td> <a href="http://curl.haxx.se/" target="rel">http://curl.haxx.se/</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> git </td><td> v1.8.4.3 </td><td>   <a href="http://git-scm.com/" target="rel">http://git-scm.com/</a> <br> <a href="http://www.kernel.org/pub/software/scm/git/" target="rel">http://www.kernel.org/pub/software/scm/git/</a> </td></tr>
  <tr bgcolor="#ffffff">
    <td> postgres </td><td> v8.4.7 </td><td> <a href="http://www.postgresql.org/" target="rel">http://www.postgresql.org/</a> <br>
      http://ftp9.us.postgresql.org/pub/mirrors/postgresql/source/
    </td>
  </tr>
  <tr bgcolor="#eaeaea"><td> java </td><td> v1.7.0_21 </td><td>  <a href="http://www.oracle.com/technetwork/java/index.html" target="rel">http://www.oracle.com/technetwork/java/index.html</a> </td></tr>
  <tr bgcolor="#ffffff"><td> thredds* </td><td> v4.3.17 </td><td>   <a href="http://www.unidata.ucar.edu/projects/THREDDS/tech/TDS.html" target="rel">http://www.unidata.ucar.edu/projects/THREDDS/tech/TDS.html</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> tomcat </td><td> v7.0.47 </td><td>  <a href="http://tomcat.apache.org/" target="rel">http://tomcat.apache.org/</a> </td></tr>
  <tr bgcolor="#ffffff">
    <td> myproxy* </td><td> v5.0.4 </td><td>http://dev.globus.org/wiki/MyProxy <br>
      http://www.globus.org/ftppub/myproxy/ <br>
      <a href="http://grid.ncsa.illinois.edu/myproxy/" target="rel">http://grid.ncsa.illinois.edu/myproxy/</a> <br>
      <a href="http://grid.ncsa.illinois.edu/myproxy/download.html" target="rel">http://grid.ncsa.illinois.edu/myproxy/download.html</a>
    </td>
  </tr>
  <tr bgcolor="#eaeaea"><td> globus* </td><td> v5.0.4 </td><td> <a href="http://www.globus.org/toolkit" target="rel">http://www.globus.org/toolkit</a> </td></tr>
  <tr bgcolor="#ffffff"><td> gridftp server*</td><td> v3.24 </td><td> http://dev.globus.org/wiki/GridFTP
      <tr><td> las </td><td> v8.1 </td><td> <a href="http://ferret.pmel.noaa.gov/LAS" target="rel">http://ferret.pmel.noaa.gov/LAS</a> </td></tr>
      <tr><td> ferret </td><td> v6.842 </td><td> <a href="http://ferret.pmel.noaa.gov/Ferret/" target="rel">http://ferret.pmel.noaa.gov/Ferret/</a>
</table>

### External Libraries Versions

<table cellspacing="1" cellpadding="1" border="0">
  <tr bgcolor="#eaeaea"><td> Library </td><td> Version / Tag </td><td> Home Site </td></tr>
  <tr bgcolor="#ffffff"><td> mhash* </td><td> v0.9.9.9 </td><td> <a href="http://sourceforge.net/projects/mhash/files/" target="rel">http://mhash.sourceforge.net/</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> pam_pgsql* </td><td> v0.7 </td><td> <a href="http://sourceforge.net/projects/pam-pgsql/files/" target="rel">http://sourceforge.net/projects/pam-pgsql/files/</a> </td></tr>
  <tr bgcolor="#ffffff"><td> bison </td><td> v2.4 </td><td> <a href="http://www.gnu.org/software/bison/" target="rel">http://www.gnu.org/software/bison/</a> <br> 
      <a href="http://ftp.gnu.org/gnu/bison/" target="rel">http://ftp.gnu.org/gnu/bison/</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> flex </td><td> v2.5.35 </td><td> <a href="http://flex.sourceforge.net/" target="rel">http://flex.sourceforge.net/</a> <br> 
      <a href="http://sourceforge.net/projects/flex/files/" target="rel">http://sourceforge.net/projects/flex/files/</a> </td></tr>
  <tr bgcolor="#ffffff"><td> gsoap </td><td> v2.7.15 </td><td> <a href="http://sourceforge.net/projects/gsoap2/files/" target="rel">http://sourceforge.net/projects/gsoap2/files/</a> </td></tr>
</table>
(<b>*</b> indicates that the installer fetches a copy of indicated file from the ESGF distribution server)

---

### Other Versions

* [Development Road Map][road-map]
* Previous [v1.5.0][other-version] (Brower Park)

[esgf-release]:       https://github.com/ESGF/esgf-installer/releases/tag/v1.6.2-bushwick_myrtle-release
[esgf-script]:        https://github.com/ESGF/esgf-installer/blob/f33e0990eb061927e64595c48b4a2182575e81a9/esg-node
[esgf-download]:      https://raw.github.com/ESGF/esgf-installer/f33e0990eb061927e64595c48b4a2182575e81a9/esg-node
[flags-features]:     https://github.com/ESGF/esgf-installer
[esgf-node]:          https://github.com/ESGF/esgf-node-manager
[esgf-home]:          https://github.com/ESGF
[wiki-functions]:     https://github.com/ESGF/esgf.github.io/wiki/ESGF_Functionality
[rainbow-dist]:       http://rainbow.llnl.gov/dist/
[rainbow-howto]:      http://rainbow.llnl.gov/dist/esgf-installer/HOWTO
[rainbow-bootstrap]:  http://rainbow.llnl.gov/dist/esgf-installer/esg-bootstrap
[release-notes]:      https://github.com/ESGF/esgf.github.io/wiki/Release_1.4
[road-map]:           https://github.com/ESGF/esgf.github.io/wiki/RoadMap
[other-version]:      http://esgf.llnl.gov/release1.5.html
