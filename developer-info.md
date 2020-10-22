---
layout: default 
title: Developers 
---

## Information for developers: Standards, guidelines, and tools

### Code

* [ESGF GitHub Repository](http://github.com/ESGF)

----

### Mailing lists

To join the developers mailing list, send an email to
[listserv@listserv.llnl.gov][listserv-devel] with the following in the body:

    subscribe esgf-devel	

(For the users mailing list, see the [mailing list] page.)

Other Mailing lists for developer Working Groups

   * [Installation Working Team List][listserv-install] esgf_iwt@llnl.gov
   * [Security Authentication / ID Mgmt Working Team List][listserv-security-auth] esgf-IdEA@llnl.gov
   * [Publication Working Team][listserv-data-pub] esgf-pwt@llnl.gov
   
----    

### Other Forms of Contact

The ESGF community has Slack and a workspace in Atlassian Confluence.  Please contact us if you need access.

### Standards

* **NO TABS**; instead use 4 spaces
    * For background behind this issue check out [this][background] site
* Java
    * For Java code please follow the [Java Style Guide][java style guide]
    * For those of us special enough to use [emacs], here is the .emacs entry to
    enforce space standards:

            (setq c-basic-offset 4)
            (setq tab-width 4)
            (setq indent-tabs-mode nil)
            (setq-default c-basic-offset 4)
            (setq-default indent-tabs-mode nil)
            (defun my-java-mode-hook ()
            (setq c-basic-offset 4)
            (setq indent-tabs-mode nil))
            (add-hook 'java-mode-hook 'my-java-mode-hook)

* Python
    * [Project Layout](#)
    * [Source Code](#)

### Guidelines

* Do not javadoc with @author tag.
* Never commit into the repo what can be generated

### Tools

* Version Control System: [git]
* Build: [ant]
* Dependency Management: [ivy]
* Unit Testing: [JUnit]
* Test Coverage: [Cobertura]
* How To Participate
    * [Join Mailing List][mailinglist]
    * Suggest changes give feedback to the community
    * [Check out the repo][github]
    * Develop changes
    * Make a pull request

<a name="manifesto"></a>

### Manifesto

Described here the inspiring principles according to which ESGF software
modules should be developed:

* Modularity
* API, loose coupling
* Open source
* Open development
* Configurability, interfaces, plugins
* Layered applications
* Support for multiple languages (Java and Python)
* Agile: rapid prototyping, frequent demos and feedback, iterative development,
  responsiveness

[background]:      http://www.jwz.org/doc/tabs-vs-spaces.html
[java style guide]: hhttps://www.oracle.com/technetwork/java/codeconvtoc-136057.html
[emacs]:            http://www.gnu.org/software/emacs
[git]:              http://git-scm.com
[ant]:              http://ant.apache.org
[ivy]:              http://ant.apache.org/ivy
[junit]:            http://www.junit.org
[cobertura]:        http://cobertura.sourceforge.net
[artifactory]:      http://www.jfrog.org/products.php
[github]:           http://github.com/ESGF
[mailinglist]:      mailing-list.html
[github]:           http://www.github.com/ESGF
[listserv-devel]:       mailto:esgf-devel@llnl.gov
[listserv-install]:     mailto:esgf_iwt@llnl.gov
[listserv-security-auth]:       mailto:esgf-idea@llnl.gov
[listserv-data-pub]:       mailto:esgf-pwt@llnl.gov
[mailing list]:     mailing-list.html

