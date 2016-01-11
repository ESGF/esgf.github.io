---
layout: default
title: ESGF Home Page 
---

<style type="text/css">
div.hero-unit {
  position: relative;
  z-index: 1;
}
div.hero-unit div.hero-bg {
  position: absolute;
  z-index: -1;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: .15;
  background: url(media/images/esgf-modeling.png) center center no-repeat;
  width: 100%;
  height: 100%;
}
img {
  max-height: 180px;
}
div.span12 {
  margin-bottom: 30px;
}
div.announcement {
  background: none;
  border: 1px solid #ccc;
  border-radius: 0;
  margin:  auto;
  margin-bottom: 20px;
  padding: 15px 30px;
  width:   75%;
}
div.announcement h3 {
  margin: 0;
}
div.announcement p {
  line-height: 1.2;
}
</style>

{% include hero.html %}

<div class="hero-unit announcement">
  <h3>ESGF Face to Face</h3>
  <p>
  <p> December 7 - 11, 2015</p>
  <p>Thank you in participating in the ESGF Conference.</p>
  <p>
  <a href="media/pdf/2015-ESGF-Agenda.pdf">Agenda</a>
   | 
  <a href="media/pdf/2015-ESGF-Abstacts.pdf">Abstracts</a>
   | 
  <a href="2015-F2F.html">ESGF Face to Face Page</a>
  </p>
  </p>
</div>

<div class="hero-unit announcement">
  <h3>Dear  ESGF community</h3>
  <p>
  ESGF has been released, and we will begin publishing data again, eta Mid January 2016.</br>
  What we have been up to.
  <ul>
  <li>Completed software scan of all modules, fixed all exposed and other potential security breaches</li>
  <li>Major upgrade of underlying system infrastructure include:</li>
  <ul>
  <li>Java 1.8, Tomcat 8, Postgres 9.4, OpenSSL 1.0, Python 2.7.9</li>
  <li>Switch ESGF installer to RPM-based components</li>
  <li>Run Apache httpd server in front of Tomcat (better performance, flexibility)</li>
  </ul>
  <li>Major upgrade of all ESGF services:</li>
  <ul>
  <li>Search services (Solr5), data download (TDS5), high performance data transfer (Globus-Connect-Server), computation (UV-CDAT), visualization (LAS)</li>
  <li>Replaced old web-front-end with new CoG user interface (your question)</li>
  </ul>
  <li>Currently republishing ALL data collections (CMIP5, CORDEX, Obs4MIPs, ana4MIPs,…)</li>
  <li>ESGF v2.1 released December 10th; fully operational scheduled for mid-January</li>
  <li>you can see the beginnings of the new CoG interface at <a href="http://pcmdi.llnl.gov">http://pcmdi.llnl.gov</a></li>
  </ul>
  To learn more about the CoG interface see: <a href="https://earthsystemcog.org">https://earthsystemcog.org</a> There’s tutorials here as well.</br>
  We thank you for your patience with us.
  </p>
</div>

<div class="span12">
  <h2>What is ESGF?</h2>
  <p>
  The Earth System Grid Federation (ESGF) Peer-to-Peer (P2P) enterprise system is
  a collaboration that develops, deploys and maintains software infrastructure for
  the management, dissemination, and analysis of model output and observational
  data. ESGF's primary goal is to facilitate advancements in Earth System Science.
  It is an interagency and international effort led by the Department of Energy (DOE), 
  and co-funded by National Aeronautics and Space Administration (NASA), 
  National Oceanic and Atmospheric Administration (NOAA), National Science Foundation (NSF), 
  and international laboratories such as the Max Planck Institute for Meteorology (MPI-M) 
  German Climate Computing Centre (DKRZ), the Australian National University (ANU) 
  National Computational Infrastructure (NCI), Institut Pierre-Simon Laplace (IPSL), 
  and the British Atmospheric Data Center (BADC). The ESGF mission is to:
  <ul>
    <li>Support current CMIP5 activities, and prepare for future assessments</li>
    <li>Develop data and metadata facilities for inclusion of observations and reanalysis products for CMIP5 use</li>
    <li>Enhance and improve current climate research infrastructure capabilities through involvement of the software development community and through adherence to sound software principles</li>
    <li>Foster collaboration across agency and political boundaries</li>
    <li>Integrate and interoperate with other software designed to meet the objectives of ESGF: e.g., software developed by NASA, NOAA, ESIP, and the European ES-INES</li>
    <li>Create software infrastructure and tools that facilitate scientific advancements</li>
  </ul>
  </p>
  <p>
  ESGF P2P is a component architecture expressly designed to handle large-scale
  data management for worldwide distribution. The team of computer scientists and
  climate scientists has developed an operational system for serving climate data
  from multiple locations and sources. Model simulations, satellite observations,
  and reanalysis products are all being served from the ESGF P2P distributed data
  archive.
  </p>
  <hr>
  <h3> U.S. Sponsors</h3>
  <div class="span12">
    <div class="row">
      <div class="span3">
        <a target="_blank" href="http://energy.gov">
          <h4 class="muted">DOE</h4>
          <img src="media/images/doe.svg" class="thumbnail">
        </a>
      </div>
      <div class="span3">
        <a target="_blank" href="http://www.nasa.gov">
          <h4 class="muted">NASA</h4>
          <img src="media/images/nasa.svg" class="thumbnail nasa">
        </a>
      </div>
      <div class="span3">
        <a target="_blank" href="http://www.noaa.gov">
          <h4 class="muted">NOAA</h4>
          <img src="media/images/noaa.svg" class="thumbnail">
        </a>
      </div>
      <div class="span3">
        <a target="_blank" href="http://www.nsf.gov">
          <h4 class="muted">NSF</h4>
          <img src="media/images/nsf.png" class="thumbnail">
        </a>
      </div>
    </div>
  </div>

  <h3>European Sponsors &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Australian Sponsors</h3>
  <div class="span12">
    <div class="row">
      <div class="span3">
        <a target="_blank" href="http://enes.org">
          <h4 class="muted">IS-ENES</h4>
          <img src="media/images/IS-ENES2.png" class="thumbnail">
        </a>
      </div>
      <div class="span3">
        <a target="_blank" href="http://nci.org.au">
          <h4 class="muted">NCI</h4>
          <img src="media/images/NCI_logo.png" class="thumbnail">
        </a>
     </div>
    </div>
  </div>
</div>
