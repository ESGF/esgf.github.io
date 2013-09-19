title: Search
subtitle: Columns template
description: Test description
---


<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="">
    <title> | ESGF.org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

        <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

        <link href="media/css/bootstrap.css" rel="stylesheet">
    <link href="media/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="media/css/nav-hover.css" rel="stylesheet">    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of
            floated navbar
            text */
            .navbar-text.pull-right
            {
                float:
                none;
                padding-left:
                5px;
                padding-right:
                5px;
            }
        }
    </style>
        
            <link rel="shortcut icon" href="media/images/favicon.ico">
    <link rel="apple-touch-icon" href="/media/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/media/img/appleimgim-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/media/img/apple-touch-icon-114x114.png">
    
        
                  </head>

  <body class="search">

    <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html"><img src="media/images/esgfSmall.png" style="float:left"/></a>
      <div class="nav-collapse">
                <ul class="nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
                    <li><a href="mission.html">Mission</a></li>
                      <li><a href="federation-design.html">Federation design</a></li>
                      <li><a href="node-design.html">Node design</a></li>
                      <li><a href="governance.html">Governance</a></li>
                      <li><a href="committee.html">Committee</a></li>
                      <li><a href="acknowledgments.html">Acknowledgments</a></li>
                </ul>
    </li>
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documents <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
                    <li><a href="publications.html">Publications</a></li>
                      <li><a href="reports.html">Reports</a></li>
                      <li><a href="conferences.html">Conferences</a></li>
                      <li><a href="letters-of-recommendation.html">Letters of recommendation</a></li>
                      <li><a href="presentations.html">Presentations</a></li>
                </ul>
    </li>
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Build <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
                    <li><a href="installation.html">Installation</a></li>
                      <li><a href="releases.html">Releases</a></li>
                      <li><a href="trust.html">Trust</a></li>
                </ul>
    </li>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="developer-info.html">Contribute</a></li>
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
                    <li><a href="http://www.youtube.com/user/ESGForg">Tutorials</a></li>
                      <li><a href="http://askbot.esgf.org/"">Support forum</a></li>
                      <li><a href="mailing-list.html">Mailing list</a></li>
                </ul>
    </li>
  </ul>
      </div>
      <form class="navbar-search pull-right visible-desktop" action="search.php" method="post"><input name="searchwhat" type="hidden" value="site">
      <input type="search" name="googleseachTerm" class="search-query span3" placeholder="search site...">
      </form>
    </div>
  </div>
  </div>

<div style="margin-bottom: 60px;"></div>


    <div class="container" id="top">
      <h2> Search </h2>

<?php include_once("searcher.php"); ?>      <hr>
      <footer>
        <p><a href="http://github.com/esgf"><img src="media/images/github.svg" style="margin-top: -7px; height: 15px;"/></a> &bull;
<a href="http://www-pcmdi.llnl.gov/">PCMDI</a> &bull; <a href="http://cmip-pcmdi.llnl.gov/cmip5/">CMIP5</a> &bull; <a href="http://www.llnl.gov/">LLNL</a> &bull; <a href="https://www.llnl.gov/disclaimer.html">Privacy &amp; Legal Notice</a> &bull; <a href="#">LLNL-WEB-460643</a></p>      </footer>
    </div> <!-- /container -->

     

                <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    
        <script src="media/js/links.js"></script>

        <script src="media/js/libs/bootstrap.js"></script>
    <script src="media/js/libs/bootstrap-button.js"></script>
    <script src="media/js/libs/bootstrap-collapse.js"></script>
    <script src="media/js/libs/bootstrap-dropdown.js"></script>
    <script src="media/js/libs/bootstrap-transition.js"></script>
        
        
    <!--[if lt IE 7 ]>
      <script src="/media/js/libs/dd_belatedpng.js"></script>
      <script>DD_belatedPNG.fix('img, .png_bg'); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
    <![endif]-->

      </body>
</html>