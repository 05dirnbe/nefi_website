<!DOCTYPE html>

<style>
  
</style>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">

<html lang="en">
  <?php include ("head.php"); ?>
  <style>
    .row img
    {
    width: 530px;
    }
  </style>
  <body>
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div id="links">
        <div class="container">
          <h2>A.Junius</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
          <a href="./images/examples/large/a_junius/junius.jpeg" title="A.Junius Image" data-gallery>
                  <img src="./images/examples/large/a_junius/junius.jpeg" alt="image" class = "thumbnail">
              </a>
          <div class="gallery-image-container">
              <a href="./images/examples/large/a_junius/Segmentation_watershed_de_adaptive_input (1).jpeg" title="Median Blur" data-gallery>
                  <img src="./images/examples/large/a_junius/Segmentation_watershed_de_adaptive_input (1).jpeg" alt="Median_Blur" class = "thumbnail">
              </a>
              <a href="./images/examples/large/a_junius/Thinning_guo_hall_thinning_input (1).jpeg" title="Segmentation Watershed adaptive" data-gallery >
                  <img src="./images/examples/large/a_junius/Thinning_guo_hall_thinning_input (1).jpeg" alt="Segmentation" class = "thumbnail">
              </a>
              <a href="./images/examples/large/a_junius/Graph Detection_guo_hall_graph_detection_input (1).jpeg" title="Thinning" data-gallery>
                  <img src="./images/examples/large/a_junius/Graph Detection_guo_hall_graph_detection_input (1).jpeg" alt="Thinning" class = "thumbnail">
              </a>
              <a href="./images/examples/large/a_junius/Graph Filtering_simple_cycle_input (1).jpeg" title="Guo & Hall Graphdetection" data-gallery>
                  <img src="./images/examples/large/a_junius/Graph Filtering_simple_cycle_input (1).jpeg" alt="Graphdetection" class = "thumbnail">
              </a>
              <a href="./images/examples/large/a_junius/Graph Filtering_keep_only_lcc_input (1).jpeg" title="Graph Filtering keep only larges connected" data-gallery>
                  <img src="./images/examples/large/a_junius/Graph Filtering_keep_only_lcc_input (1).jpeg" alt="Filtering" class = "thumbnail">
              </a>  
              </div>
        </div>
        <div class="container">
          <h2>P. Polycephalum</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
          <a href="./images/examples/large/poly/poly.jpeg" title="A.Junius Image" data-gallery>
                  <img src="./images/examples/large/poly/poly.jpeg" alt="<im></im>age" class = "thumbnail">
              </a>
          <div class="gallery-image-container">
              <a href="./images/examples/large/poly/Segmentation_otsus_input.jpeg" title="Median Blur" data-gallery>
                  <img src="./images/examples/large/poly/Segmentation_otsus_input.jpeg" alt="Median_Blur" class = "thumbnail">
              </a>
              <a href="./images/examples/large/poly/Thinning_guo_hall_thinning_input.jpeg" title="Segmentation Watershed adaptive" data-gallery >
                  <img src="./images/examples/large/poly/Thinning_guo_hall_thinning_input.jpeg" alt="Segmentation" class = "thumbnail">
              </a>
              <a href="./images/examples/large/poly/Graph Detection_guo_hall_graph_detection_input.jpeg" title="Thinning" data-gallery>
                  <img src="./images/examples/large/poly/Graph Detection_guo_hall_graph_detection_input.jpeg" alt="Thinning" class = "thumbnail">
              </a>
              <a href="./images/examples/large/poly/Graph Filtering_simple_cycle_input.jpeg" title="Guo & Hall Graphdetection" data-gallery>
                  <img src="./images/examples/large/poly/Graph Filtering_simple_cycle_input.jpeg" alt="Graphdetection" class = "thumbnail">
              </a>
              <a href="./images/examples/large/poly/Graph Filtering_keep_only_lcc_input.jpeg" title="Graph Filtering keep only larges connected" data-gallery>
                  <img src="./images/examples/large/poly/Graph Filtering_keep_only_lcc_input.jpeg" alt="Filtering" class = "thumbnail">
              </a>  
              </div>
        </div>
        <div class="container">
          <h2>Crack Patterns</h2>
          <p>Reliable quantification and analysis of observables defined on networks can be potent tools when studying 
            dynamic processes such as the formation of crack patterns.</p>
            <a href="./images/examples/large/crack_patterns/crack_patterns.jpeg" title="Crack Patterns Image" data-gallery>
                  <img src="./images/examples/large/crack_patterns/crack_patterns.jpeg" alt="crack_pattern_image" class = "thumbnail">
              </a>
          <div class="gallery-image-container">
              <a href="./images/examples/large/crack_patterns/Segmentation_otsus_input.jpeg" title="Otsus Segmentation" data-gallery>
                  <img src="./images/examples/large/crack_patterns/Segmentation_otsus_input.jpeg" alt="otsus_segmentation" class = "thumbnail">
              </a>
              <a href="./images/examples/large/crack_patterns/Thinning_guo_hall_thinning_input.jpeg" title="Thinning" data-gallery>
                  <img src="./images/examples/large/crack_patterns/Thinning_guo_hall_thinning_input.jpeg" alt="thinning" class = "thumbnail">
              </a>
              <a href="./images/examples/large/crack_patterns/Graph Detection_guo_hall_graph_detection_input.jpeg" title="Guo & Hall Graphdetection" data-gallery>
                  <img src="./images/examples/large/crack_patterns/Graph Detection_guo_hall_graph_detection_input.jpeg" alt="guo_hall_graphdetection" class = "thumbnail">
              </a>
              <a href="./images/examples/large/crack_patterns/Graph Filtering_keep_only_lcc_input.jpeg" title="Graph Filtering keep only largest connected" data-gallery>
                  <img src="./images/examples/large/crack_patterns/Graph Filtering_keep_only_lcc_input.jpeg" alt="graph_filtering" class = "thumbnail">
              </a>
              </div>
        </div>
        <div class="container">
          <h2>Leaf Venation</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
          <a href="./images/examples/large/leaf_venation/leaf_venation.jpeg" title="Leaf Venation Image" data-gallery>
                  <img src="./images/examples/large/leaf_venation/leaf_venation.jpeg" alt="leaf_venation" class = "thumbnail">
          </a>
          <div class="gallery-image-container">
              <a href="./images/examples/large/leaf_venation/Segmentation_otsus_input.jpeg" title="Otsus Segmentation" data-gallery>
                  <img src="./images/examples/large/leaf_venation/Segmentation_otsus_input.jpeg" alt="otsus_segmentation" class = "thumbnail">
              </a>
              <a href="./images/examples/large/leaf_venation/Thinning_guo_hall_thinning_input.jpeg" title="Thinning" data-gallery>
                  <img src="./images/examples/large/leaf_venation/Thinning_guo_hall_thinning_input.jpeg" alt="thinning" class = "thumbnail">
              </a>
              <a href="./images/examples/large/leaf_venation/Graph Detection_guo_hall_graph_detection_input.jpeg" title="Guo & Hall Graphdetection" data-gallery>
                  <img src="./images/examples/large/leaf_venation/Graph Detection_guo_hall_graph_detection_input.jpeg" alt="graph_detection" class = "thumbnail">
              </a>
              <a href="./images/examples/large/leaf_venation/Graph Filtering_keep_only_lcc_input.jpeg" title="Graph Filtering keep only largest connected" data-gallery>
                  <img src="./images/examples/large/leaf_venation/Graph Filtering_keep_only_lcc_input.jpeg" alt="graph_filtering" class = "thumbnail">
              </a>
              </div>
        </div>
        <div class="container">
          <h2>Tiles</h2>
          <p>Network extraction is not limited to applications in biology or physics. 
            Abstracting away from the content of an image in order to focus on the underying network can grant a different view on man-made structures as well.</p>
            <a href="./images/examples/large/tiles/tiles.jpeg" title="Tiles Image" data-gallery>
                  <img src="./images/examples/large/tiles/tiles.jpeg" alt="image" class = "thumbnail">
              </a>
          <div class="gallery-image-container">
              <a href="./images/examples/large/tiles/Segmentation_grabcut_de_otsus_input.jpeg" title="Otsus Segmentation" data-gallery>
                  <img src="./images/examples/large/tiles/Segmentation_grabcut_de_otsus_input.jpeg" alt="otsus_segmentation" class = "thumbnail">
              </a>
              <a href="./images/examples/large/tiles/Thinning_guo_hall_thinning_input.jpeg" title="Thinning" data-gallery>
                  <img src="./images/examples/large/tiles/Thinning_guo_hall_thinning_input.jpeg" alt="thinning" class = "thumbnail">
              </a>
              <a href="./images/examples/large/tiles/Graph Detection_guo_hall_graph_detection_input.jpeg" title="Guo & Hall Graphdetection" data-gallery>
                  <img src="./images/examples/large/tiles/Graph Detection_guo_hall_graph_detection_input.jpeg" alt="graph_detection" class = "thumbnail">
              </a>
              <a href="./images/examples/large/tiles/Graph Filtering_keep_only_lcc_input.jpeg" title="Graph Filtering keep only largest connected" data-gallery>
                  <img src="./images/examples/large/tiles/Graph Filtering_keep_only_lcc_input.jpeg" alt="graph_filtering" class = "thumbnail">
              </a>
              <a href="./images/examples/large/tiles/Graph Filtering_simple_cycle_input.jpeg" title="Graph Filtering simple cycle" data-gallery>
                  <img src="./images/examples/large/tiles/Graph Filtering_simple_cycle_input.jpeg" alt="graph_filtering" class = "thumbnail">
              </a>
              <a href="./images/examples/large/tiles/Graph Filtering_smooth_2_nodes_input.jpeg" title="Graph Filtering smooth 2 nodes" data-gallery>
                  <img src="./images/examples/large/tiles/Graph Filtering_smooth_2_nodes_input.jpeg" alt="graph_filtering" class = "thumbnail">
              </a>
              </div>
        </div>
        <div class="container">
          <h2>Another Spider Web</h2>
          <p>This is an example of an almost optimal spider web network extraction.</p>
          <a href="./images/examples/large/web2/web2.jpg" title="Web #2 Image" data-gallery>
                  <img src="./images/examples/large/web2/web2.jpg" alt="image"" class="thumbnail">
              </a>
          <div class="gallery-image-container">
              <a href="./images/examples/large/web2/Preprocessing_invert_color_web5.jpg" title="Preprocessing Invert Color" data-gallery>
                  <img src="./images/examples/large/web2/Preprocessing_invert_color_web5.jpg" alt="invert" class = "thumbnail">
              </a>
              <a href="./images/examples/large/web2/Preprocessing_bilateral_web5.jpg" title="Preprocessing Bilateral" data-gallery>
                  <img src="./images/examples/large/web2/Preprocessing_bilateral_web5.jpg" alt="bilateral" class = "thumbnail">
              </a>
              <a href="./images/examples/large/web2/Segmentation_constant_web5.jpg" title="Constant Segmentation" data-gallery>
                  <img src="./images/examples/large/web2/Segmentation_constant_web5.jpg" alt="constant" class = "thumbnail">
              </a>
              <a href="./images/examples/large/web2/Thinning_guo_hall_thinning_web5.jpg" title="Thinning" data-gallery>
                  <img src="./images/examples/large/web2/Thinning_guo_hall_thinning_web5.jpg" alt="thinning" class = "thumbnail">
              </a>
              <a href="./images/examples/large/web2/Graph Detection_guo_hall_graph_detection_web5.jpg" title="Guo & Hall Graphdetection" data-gallery>
                  <img src="./images/examples/large/web2/Graph Detection_guo_hall_graph_detection_web5.jpg" alt="graph_detection" class = "thumbnail">
              </a>
              <a href="./images/examples/large/web2/Graph Filtering_smooth_2_nodes_web5.jpg" title="Graph Filtering smooth 2 nodes" data-gallery>
                  <img src="./images/examples/large/web2/Graph Filtering_smooth_2_nodes_web5.jpg" alt="graph_filtering" class = "thumbnail">
              </a>
          </div>
        </div>
        </div>
    </div>
  </body>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
  <script src="js/bootstrap-image-gallery.min.js"></script>
  <?php include ("footer.php"); ?>
</html>
