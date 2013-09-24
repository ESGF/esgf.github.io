---
layout: releases_sidebar
title: Releases
---

## ESGF Node Current Release
#### [v1.5.0-brower_park-release (Brower Park, Brooklyn)][esgf-release]
The embodiment of the node application stack is indeed the [installation script][esgf-script] ([downlad][esgf-download]). The script automates the installation process installing the node's application stack in a predictable and uniform way.  This allows for better maintenance and ease of upgrade. The script is written in bash and has a number of features.  Though, one could install these components individiually on one's own.  It is **HIGHLY** recommended to use the script for all installation and update needs.  Learn more about the script, it's flags and features [here][flags-featres].

The ESGF Node, as discussed on the [node][esgf-node] page, is an amalgam of software components that work in concert to perform the higher level tasks of the Node.  The Node is a collectionof components developed by the members of the [ESGF.org][esgf-home] open source effort as well as external tools and libraries that provide support for the ESGF Node feature set. A list of ESGF P2P Node functionality is posted [here][wiki-functions].

---

### Installation Quick Notes
When upgrading please migrate your tomcat configurations first, with the following commands (in the given order)

    % esg-node --migrate-tomcat-credentials-to-esgf
    % esg-node --check u
    % esg-node --install

The best and recommended way to install and setup the Node is to first visit the [installation page][rainbow-dist] and read the short preparation [how to][rainbow-howto] document and then download and run the [bootstrap script][rainbow-bootstrap] onto the target machine.  The bootstrap script downloads the installation script that in-turn installs and configures all the ESGF Node components, culminating in a functioning Node instance that is able to scan, index, publish, share and monitor your data.

---

###Features & [Functionality][wiki-functions]
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

###Node Component Versions:
<table cellspacing="1" cellpadding="1" border="0">
  <tr bgcolor="#eaeaea"><td> Project </td><td> Version / Tag&nbsp;&nbsp;</td><td> Home Site </td></tr>
  <tr bgcolor="#ffffff"><td> node-manager&nbsp;&nbsp;</td><td> v0.6.14 (db [1])</td><td> <a href="http://esgf.org/esgf-node-manager-site">http://esgf.org/esgf-node-manager-site</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> publisher </td><td> v2.11.0 </td><td> <a href="http://esgf.org/esg-publisher-site">http://esgf.org/esg-publisher-site</a> </td></tr>
  <tr bgcolor="#ffffff"><td> orp </td><td> v2.3.1 </td><td> <a href="http://esgf.org/esg-orp-site">http://esgf.org/esg-orp-site</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> security </td><td> v2.3.8 (db [2]) </td><td> <a href="http://esgf.org/esgf-security-site">http://esgf.org/esgf-security-site</a> </td></tr>
  <tr bgcolor="#ffffff"><td> search </td><td> v3.7.2 </td><td> <a href="http://esgf.org/esg-search-site">http://esgf.org/esg-search-site</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> idp </td><td> v2.4.1 </td><td> <a href="http://esgf.org/esgf-idp-site">http://esgf.org/esgf-idp-site</a> </td></tr>
  <tr bgcolor="#ffffff"><td> web-fe </td><td> v2.3.6 </td><td> <a href="http://esgf.org/esgf-web-fe-site">http://esgf.org/esgf-web-fe-site</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> dashboard </td><td> v1.3.3 (db [5])</td><td> <a href="http://esgf.org/esgf-dashboard-site">http://esgf.org/esgf-dashboard-site</a> </td></tr>
  <tr bgcolor="#ffffff"><td> desktop </td><td> v0.0.4 </td><td><a href="http://esgf.org/esgf-desktop-site">http://esgf.org/esgf-desktop-site</a></td></tr>
</table>

###External Application Stack Versions
<table cellspacing="1" cellpadding="1" border="0">
  <tr bgcolor="#eaeaea"><td> Application </td><td> Version / Tag </td><td> Home Site </td></tr>
  <tr bgcolor="#ffffff"><td> ant </td><td> v1.8.3 </td><td>   <a href="http://ant.apache.org/" target="rel">http://ant.apache.org/</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> cdat </td><td> v0.0.1 </td><td> <a href="http://uv-cdat.llnl.gov/" target="rel">http://uv-cdat.llnl.gov/</a> </td></tr>
  <tr bgcolor="#ffffff"><td> curl </td><td> v7.20.1 </td><td> <a href="http://curl.haxx.se/" target="rel">http://curl.haxx.se/</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> git </td><td> v1.7.3 </td><td>   <a href="http://git-scm.com/" target="rel">http://git-scm.com/</a> <br> <a href="http://www.kernel.org/pub/software/scm/git/" target="rel">http://www.kernel.org/pub/software/scm/git/</a> </td></tr>
  <tr bgcolor="#ffffff">
    <td> postgres </td><td> v8.4.7 </td><td> <a href="http://www.postgresql.org/" target="rel">http://www.postgresql.org/</a> <br>
      <a href="http://ftp9.us.postgresql.org/pub/mirrors/postgresql/source/" target="rel">http://ftp9.us.postgresql.org/pub/mirrors/postgresql/source/</a>
    </td>
  </tr>
  <tr bgcolor="#eaeaea"><td> java </td><td> v1.6.0_45 </td><td>  <a href="http://www.oracle.com/technetwork/java/index.html" target="rel">http://www.oracle.com/technetwork/java/index.html</a> </td></tr>
  <tr bgcolor="#ffffff"><td> thredds* </td><td> v4.2.10 </td><td>   <a href="http://www.unidata.ucar.edu/projects/THREDDS/tech/TDS.html" target="rel">http://www.unidata.ucar.edu/projects/THREDDS/tech/TDS.html</a> </td></tr>
  <tr bgcolor="#eaeaea"><td> tomcat </td><td> v6.0.36 </td><td>  <a href="http://tomcat.apache.org/" target="rel">http://tomcat.apache.org/</a> </td></tr>
  <tr bgcolor="#ffffff">
    <td> myproxy* </td><td> v5.0.4 </td><td><a href="http://dev.globus.org/wiki/MyProxy" target="rel">http://dev.globus.org/wiki/MyProxy</a> <br>
      <a href="http://www.globus.org/ftppub/myproxy/" target="rel">http://www.globus.org/ftppub/myproxy/</a> <br>
      <a href="http://grid.ncsa.illinois.edu/myproxy/" target="rel">http://grid.ncsa.illinois.edu/myproxy/</a> <br>
      <a href="http://grid.ncsa.illinois.edu/myproxy/download.html" target="rel">http://grid.ncsa.illinois.edu/myproxy/download.html</a>
    </td>
  </tr>
  <tr bgcolor="#eaeaea"><td> globus* </td><td> v5.0.4 </td><td> <a href="http://www.globus.org/toolkit" target="rel">http://www.globus.org/toolkit</a> </td></tr>
  <tr bgcolor="#ffffff"><td> gridftp server*</td><td> v3.24 </td><td> <a href="http://dev.globus.org/wiki/GridFTP" target="rel">http://dev.globus.org/wiki/GridFTP</a>
      <tr><td> las </td><td> v8.1 </td><td> <a href="http://ferret.pmel.noaa.gov/LAS" target="rel">http://ferret.pmel.noaa.gov/LAS</a> </td></tr>
      <tr><td> ferret </td><td> v6.842 </td><td> <a href="http://ferret.pmel.noaa.gov/Ferret/" target="rel">http://ferret.pmel.noaa.gov/Ferret/</a>
</table>

###External Libraries Versions

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
(<b>*</b> indicates that the installer fetches a copy of indicated file from the ESGF.org distribution server)

### Release Notes
* [Release Information and Features][release-notes]

---

###Other Versions
* [Development Road Map][road-map]
* Previous [v1.4.0][other-version] (Brooklyn Heights)

[esgf-release]: http://esgf.org/gitweb/?p=esgf-installer.git;a=commit;h=6e8e8c56816e693b532b74021e5870058ed49ffa
[esgf-script]: http://esgf.org/gitweb/?p=esgf-installer.git;a=blob;f=esg-node;h=5cb7bd9f8d8133c4c35cafe9f3b58c62d0309487;hb=6e8e8c56816e693b532b74021e5870058ed49ffa
[esgf-download]: http://esgf.org/gitweb/?p=esgf-installer.git;a=blob_plain;f=esg-node;h=5cb7bd9f8d8133c4c35cafe9f3b58c62d0309487;hb=6e8e8c56816e693b532b74021e5870058ed49ffa
[flags-features]: http://esgf.org/esgf-installer-site
[esgf-node]: node.html
[esgf-home]: http://esgf.org
[wiki-functions]: http://www.esgf.org/wiki/ESGF_Functionality
[rainbow-dist]: http://rainbow.llnl.gov/dist/
[rainbow-howto]: http://rainbow.llnl.gov/dist/esgf-installer/HOWTO
[rainbow-bootstrap]: http://rainbow.llnl.gov/dist/esgf-installer/esg-bootstrap
[release-notes]: http://www.esgf.org/wiki/Release_1.4
[road-map]: http://www.esgf.org/wiki/RoadMap
[other-version]: rel-v1.4.2-brooklyn_heights.html
