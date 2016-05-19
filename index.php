<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  
  <?php 
  echo "Hallo Welt";
  require("./head.php"); ?>

  <body>
    <div class="jumbotron">
      <div class="container">
        <!-- Main component for a primary marketing message or call to action -->


        
        <h1>Network Extraction From Images 2.0</h1>

        <p>NEFI is an extensible tool for extracting graphs from images of networks.</p>
      </div>
    </div><!-- /container -->

    <div class="container">
      <!-- Example row of columns -->

      <div class="row" style="position:relative; left:200px;">
        <div class="col-md-4">
          <h2>Examples</h2>
          <a class="btn btn-lg btn-primary" href="./gallery.php"
             role="button">Gallery »</a>
          <p></p>
          <p>NEFI has many potential applications. Here we showcase some of the things you can do
            with our software.</p>
        </div>

        <div class="col-md-4">
          <h2>Guide</h2>
          <a class="btn btn-lg btn-primary"  href="./guide.php" role=
             "button">Getting Started »</a>
          <p></p>
          <p>Using NEFI is very simple. This document will get you started right away.</p>
        </div>
      </div>
      <div class="row" style="position:relative; left:200px;">
        <div class="col-md-4">
          <h2>Get NEFI</h2>
          <a class="btn btn-lg btn-primary"  href="./download.php"
             role="button">Download »</a>
          <p></p>
          <p>NEFI is available for Windows, Linux and Mac.</p>
        </div>
        <div class="col-md-4">
          <h2>Contribute</h2>
          <a class="btn btn-lg btn-primary"  href="https://github.com/05dirnbe/nefi" role=
             "button">Github »</a>
          <p></p>
          <p>Help us improve and contribute your ideas</p>
        </div>
      </div><!-- row -->
    </div>
    
    
    
    <div class="spacer-huge"/>
  </body>


  <?php require("./footer.php"); ?>
</html>
