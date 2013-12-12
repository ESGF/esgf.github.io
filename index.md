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
  <h3>Peer Node Status</h3>
  <p>
    <a href="https://github.com/ESGF/esgf.github.io/wiki/Peer-Node-Status">Peer Node Status</a> updated nightly.
  </p>
</div>

<div class="span12">
  <h2>What is ESGF?</h2>
  <p>
  The Earth System Grid Federation (ESGF) Peer-to-Peer (P2P) enterprise system is
  a collaboration that develops, deploys and maintains software infrastructure for
  the management, dissemination, and analysis of model output and observational
  data. ESGF's primary goal is to facilitate advancements in Earth System Science.
  It is an interagency and international effort led by the Department of Energy
  (DOE), and co-funded by National Aeronautics and Space Administration (NASA),
  National Oceanic and Atmospheric Administration (NOAA), National Science
  Foundation (NSF), and international laboratories such as the Max Planck
  Institute for Meteorology (MPI-M) German Climate Computing Centre (DKRZ), the
  Australian National University (ANU) National Computational Infrastructure
  (NCI), and the British Atmospheric Data Center (BADC). The ESGF mission is to:
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
      </div><!--/.span3-->
      <div class="span3">
        <a target="_blank" href="http://www.nasa.gov">
          <h4 class="muted">NASA</h4>
          <img src="media/images/nasa.svg" class="thumbnail nasa">
        </a>
      </div><!--/.span3-->
      <div class="span3">
        <a target="_blank" href="http://www.noaa.gov">
          <h4 class="muted">NOAA</h4>
          <img src="media/images/noaa.svg" class="thumbnail">
        </a>
      </div><!--/.span3-->
      <div class="span3">
        <a target="_blank" href="http://www.nsf.gov">
          <h4 class="muted">NSF</h4>
          <img src="media/images/nsf.png" class="thumbnail">
        </a>
      </div><!--/.span3-->
    </div><!--/.row for span3s-->
  </div>
  <h3>European Sponsors</h3>
  <div class="span12">
    <div class="row">
      <div class="span3">
        <a target="_blank" href="http://enes.org/">
          <h4 class="muted">IS-ENES</h4>
          <img src="media/images/IS-ENES2.png" class="thumbnail">
        </a>
      </div>
    </div>
  </div>
</div>
