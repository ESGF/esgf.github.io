---
layout: default
title: Installation
---

## Esgf Node Installation
The installation is an interactive process where the user is prompted for input.
To help manage your expectations of the installation process, the following
should give you a ballpark idea:

* The entire process takes approximately an hour.
* There are about a 20 prompts for user input - almost all of which have
resonable defaults (you can just hit enter - recommended).
* The lion's share of the time is spent building the various tools and
executables (heads up: globus and python take a relatively long time to build).

### Operating Systems
we currently support centOS / RedHat

### Prerequisites
Before getting started, you must have the following packages installed
on your system. If you have machine or ssh access you can run this
preinstaller python script.

    wget https://raw2.github.com/aims-group/webshooter/master/esgfpreinstaller.py
    chmod 755 esgfpreinstaller.py
    python esgfpreinstaller.py

it should run out of the box with python 2.6.6 or higher, if not see the
scrips [wiki page][preinstaller].

### Packages
when avaiable always download and install the devel versions


* autoconf-archive.noarch: The Autoconf Macro Archive 
* autoconf.noarch: A GNU tool for automatically configuring source code 
* automake.noarch: A GNU tool for automatically creating Makefiles 
* bison-devel: -ly library for development using Bison-generated parsers 
* bison-runtime: Runtime support files used by Bison-generated parsers 
* file-libs: Libraries for applications using libmagic 
* file-roller: Tool for viewing and creating archives 
* flexiport-devel: Header files and libraries for flexiport 
* jflex-javadoc.noarch: Javadoc for jflex 
* libgcc: GCC version 4.4 shared support library 
* gcc-c++: C++ support for GCC 
* gettext-devel: Development files for gettext 
* libtool-ltdl-devel: Tools needed for development using the GNU Libtool Dynamic Module Loader 
* libtool: The GNU Portable Library Tool 
* libuuid-devel: Universally unique ID library 
* libxml2: Library providing XML and HTML support 
* libxml2-devel: Libraries, includes, etc. to develop XML and HTML applications 
* libxslt: Library providing the Gnome XSLT engine 
* libxslt-devel: Libraries, includes, etc. to embed the Gnome XSLT engine 
* lsof: A utility which lists open files on a Linux/UNIX system 
* make: A GNU tool which simplifies the build process for users 
* openssl-devel: Files for development of applications which will use OpenSSL 
* pam-devel: Files needed for developing PAM-aware applications and modules for PAM 
* pax: POSIX File System Archiver 
* pax-utils: PaX aware and related utilities for ELF binaries 
* readline-devel: Files needed to develop programs which use the readline library 
* tk-devel: Tk graphical toolkit development files 
* wget: A utility for retrieving files using the HTTP or FTP protocols 
* zlib-devel: Header files and libraries for Zlib development 
* perl-[ExtUtils]* 
* perl-Archive-Tar: A module for Perl manipulation of .tar files 
* perl-XML-Parser: Perl module for parsing XML files 
* xorg-x11* 

###Useful links

* [FAQ]
* [Installer Wiki page][wiki]
* [README]
* [Bootstrap script][bootstrap]
* [ESGF Wiki][sitewiki]
* [Releases]
* [License]

### Known Gotchas

* Default peer node is esgf-node1.llnl.gov.  User should choose a valid node like pcmdi9.llnl.gov.  If user had selected esgf-node1.llnl.gov initially, best solution after the script fails is to go to /esg/config/esgf.properties and replace every instance of esgf-node1.llnl.gov with pcmdi9.llnl.gov.
* GridFTP installation.  Fails because the uuid.h header file can't be found.  The solution is to install uuid-devel and libuuid-devel as prerequisites.
* CDAT installation.  There was a problem with building CDAT.  This was fixed by pointing the script to the right hash of the latest cdat installation.  This can be found in line 131 of esg-node and changed to77421b9205d347950f31b1815781f010087da7d1

---

[installation]: https://github.com/ESGF/esgf.github.io/wiki/Installation
[readme]:       https://raw.github.com/ESGF/esgf-installer/master/README
[bootstrap]:    https://raw.github.com/ESGF/esgf-installer/master/esg-bootstrap
[license]:      https://raw.github.com/ESGF/esgf-installer/master/LICENSE
[releases]:     https://github.com/ESGF/esgf-installer/releases
[faq]:          https://github.com/ESGF/esgf.github.io/wiki/ESGFNode%7CFAQ
[preinstaller]: https://github.com/aims-group/webshooter/wiki/esgfpreinstaller
[wiki]:         http://github.com/ESGF/esgf-installer/wiki
[sitewiki]:     https://github.com/ESGF/esgf.github.io/wiki
[extutils]:     https://github.com/ESGF/esgf.github.io/wiki/ExtUtils
