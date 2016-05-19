<!DOCTYPE html>

<html lang="en">
  <?php include ("./head.php"); ?>

  <body>
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="mid-section">
        <div class="container" style="width: 100%; position: relative;  left: -30px; top: 30px;">
          <div class="container" style="display: block; float: left;  width: 300px;">
            <h2>Content</h2>

            <ul class="list-group" style="list-style-type: none;">
              <li>
                <a href="#introduction" class="list-group-item">Introduction</a>
              </li>
            
             
              <li>
                <a href="#details" class="list-group-item">Design philosophy</a>
              </li>
              
              <li>
                <a href="#limitations" class="list-group-item">Accuracy, performance and limitations</a>
              </li>

              <li>
                <a href="#contribution" class="list-group-item">Making NEFI a community effort</a>
              </li>
              
              
              <li>
                <a href="#installation" class="list-group-item">Installation</a>
              </li>

              <li>
                <a href="#mailinglist" class="list-group-item">Mailing List</a>
              </li>

              <li>
                <a href="#citing" class="list-group-item">How to cite NEFI</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="text-box">
          <h2 id="introduction">Introduction</h2>

          <p>NEFI is a Python tool created to extract networks from images. Given a suitable 2D image of
            a network as input, NEFI outputs a mathematical representation of the structure of the depicted
            network as a weighted undirected planar <a href=
                                                       "http://en.wikipedia.org/wiki/Graph_%28mathematics%29">graph</a>. Representing the structure of
            the network as a graph enables subsequent studies of its properties using tools and concepts
            from <a href="http://en.wikipedia.org/wiki/Graph_theory">graph theory</a>.</p>

          <p>NEFI was developed and tested primarily for the study of vein networks of the slime mold
            <a href="http://en.wikipedia.org/wiki/Physarum_polycephalum">P.&nbsp;polycephalum</a>. However, the
            authors successfully processed images of networks of different origin. Have a look at the examples in the
            <a href="./gallery.php">Gallery</a> for details.</p>

          <p>NEFI builds on top of well-documented open source libraries in order to provide a reliable,
            transparent and extendable collection of interchangeable solutions. NEFI facilitates single
            image analysis as well as batch processing and aims to enable scientists and practitioners of
            various domains to freely explore, analyze and process their data in an intuitive, hands-on
            fashion.</p>

          <p>Our major motivation in developing NEFI is to enable virtually everyone to automatically
            extract networks from images. While we may not be the first to attack this problem, we seek to
            overcome some of the limitations of existing solutions. To this end we present an extensible
            toolbox hidden behind an intuitive graphical user interface. NEFI was designed to give the
            practitioners in the labs the possibility to have a quick look at the pictures they just took
            to get a first impression of their observations. NEFI was designed to allow theoreticians to
            quickly falsify the predictions of their newest model using real world data. NEFI aims to
            enable and promote the application of graph theory across different fields and to be a useful
            tool for everyone seeking to bridge the gap between theory and experiment.</p>
          <p>
            To learn bout how to use NEFI to extract graph structures from images  please refer to our
            <a href="./documentation/rst_files/Quick_Start_Guide_for_users.html"> Quick Start Guide for users</a>.
          </p>
          <p>If you want to contribute to NEFI we advice you to go through our
            <a href="./documentation/rst_files/Quick_Start_Guide_for_developers.html">Quick Start Guide for developers</a>.
          </p>
          
        </div>
        
        <div class="text-box">
          <h2 id="details">Design philosophy</h2>

          <p>NEFI's approach is centered around the idea of intuitively combining algorithms to form an
            effective extraction pipeline. Thus NEFI does not stop at implementing a single solution to the
            network extraction problem but forms a flexible collection of powerful routines readily
            available for users of any experience level. We stress that NEFI does not require any
            prerequisite knowledge in image processing, computer vision or software design to be put to
            effective use. On the other hand, experts who are developing their own algorithms for network
            extraction are invited to consider using NEFI as an extendable framework. NEFI's modular design
            facilitates adding new methods to NEFI make it easier to compare different approaches against
            each other. Also, integrating your new algorithms into NEFI it might make it easier for you to
            reach wider audiences and thus gain a bigger impact.</p>

          <p>These straightforward considerations have become the guiding principles in NEFI's
            development and are reflected in NEFI's design and implementation choices.</p>

          <p>We use Python to develop NEFI and rely on a number of expertly written, well-documented
            and time-tested libraries. Thus NEFI becomes more efficient, better documented and more accessible to external contributers. </p>
        </div>
        
        
        <div class="text-box">
          <h2 id="limitations">Accuracy, performance and limitations</h2>

          <p>NEFI was designed for efficient and robust single image as well as batch processing.
            Depending on the characteristics of the input image and the selected pipeline the quality of
            the resulting graph may vary. The major factor determining the quality of the graph is the
            segmentation step.</p>

          <p>Many segmentation methods, including <a href=
                                                     "http://en.wikipedia.org/wiki/Watershed_%28image_processing%29">Watershed</a> and <a href=
                                                                                                                                          "http://en.wikipedia.org/wiki/GrabCut">GrabCut</a> work very well if they do not have to deal
            with low-contrast pictures showing strong background color gradients. In such cases, more
            technically involved approaches are called for to overcome such challenging conditions.</p>

          <p>NEFI's accuracy is a measure of how closely the computed graph resembles the originally
            depicted input network. Thus, when using segmentation as necessary step in network extraction,
            NEFI inherits the strengths and the weaknesses of its algorithms. NEFI tends to produce a lot
            of artifacts and faulty segmentations if the input pictures show</p>

          <ul>
            <li>Highly irregular backgrounds with strong color/brightness gradients.</li>

            <li>Isolated low contrast regions.</li>

            <li>Networks with edges that are too fine to be segmented correctly with the given image
              resolution.</li>

            <li>Networks that are too dense too be separated correctly</li>
          </ul>

          <p>NEFI is designed to efficiently process large quantities of images. To this end NEFI
            outsources much of its computational load to highly optimized and reliable library code. The
            table below illustrates the effectiveness of a typical pipeline given input images of different
            size. The timings were obtained on a Mac notebook equipped with 2,4 GHz Intel i5 and 8 GB
            RAM.</p>

          <table class="table table-hover" style="width:100%">
            <thead>
              <tr>
                <th>Pipeline element</th>

                <th>Small image: 1152 x 864 pixels</th>

                <th>Large image: 5760 x 3840 pixels</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Blur image</td>

                <td>&lt; 1 s</td>

                <td>&lt; 3 s</td>
              </tr>

              <tr>
                <td>Guided Watershed with adaptive threshold mask</td>

                <td>&lt; 1 s</td>

                <td>&lt; 8 s</td>
              </tr>

              <tr>
                <td>Guo-Hall Thinning</td>

                <td>&lt; 1 s</td>

                <td>&lt; 5 s</td>
              </tr>

              <tr>
                <td>Node detection</td>

                <td>&lt; 1 s</td>

                <td>&lt; 10 s</td>
              </tr>

              <tr>
                <td>Computing edge weights</td>

                <td>&lt; 2 s</td>

                <td>&lt; 10 s</td>
              </tr>

              <tr>
                <td>Compute largest connected component</td>

                <td>&lt; 2 s</td>

                <td>&lt; 4 s</td>
              </tr>
            </tbody>
          </table>

          <p>An additional limitation of NEFI consists of the inability to detect nodes of degree 2.
            NEFI's node detection relies on the skeleton of the segmented image. However, since the
            skeleton reflecting a path of nodes of degree two cannot be distinguished from a single long
            edge, degree 2 nodes are automatically contracted. The authors stress at this point that NEFI, like any other piece of code,
            has its limitations and we are not trying to wipe them under the rug. NEFI it is not capable of dealing with every possible input picture
            and was never intended to do so. However, NEFI tries to make up for its weaknesses by offering
            the possibility to integrate additional algorithms tailored towards a challenging input. If you managed to find a way to treat more difficult images,
            consider becoming a developer and share your advance with others by adding your solution to the set of NEFI's algorithms.</p>
        </div>

        <div class="text-box">
          <h2 id="contribution">Making NEFI a community effort</h2>

          <p>Excellent code relies on excellent libraries. Excellent libraries are excellent, because they are actively developed and are ever improving. 
          NEFI relies on many such libraries to be useful and strives to stay relevant in the future. Currently a 2-man team of students supervised by core developers 
          is maintaining the code base to make sure that NEFI is not falling behind. However, one of our major goals with NEFI is to attract a larger base of interested external developers
          willing to tune in to the repository and keep an eye on the code. To make joining the project as easy as possible we decided to move from NEFI 1.0 to NEFI 2.0.
          With NEFI 2.0 we put a strong emphasis on clear design abiding best practices of software engineering paired with an extensive documentation suitable for users and developers alike. 
          Using a very modular architecture it becomes trivial to add new algorithms to NEFI. Setting up a dedicated git repository as the backbone of NEFI ensures that future developments, issues and support are properly organized and taken care of.
          </p>

          <p>Now, despite our efforts, we try to keep it real and do not expect a bunch of people to show up making enormous contributions all of a sudden. However, we worked hard to enable 
          NEFI to gradually transition away from being a small "behind-closed-doors" research project towards a community-driven open source effort. We believe that by opening up the project to everyone NEFI has a larger potential to grow
          and stay relevant in the future. In order for NEFI to become self-suffcient, we need interested people willing to adopt NEFI as one of their projects.
          </p>
          <p> If you are interested in contributing to the NEFI project in any way please contact us or visit
            our github.
          </p>

          <p>If you need more informations about the structure of NEFI you should checkout the
            <a href="./NEFI/documentation/index.html">Documentation</a>. For further questions we invite you
            to discuss the state of the NEFI project with us in the Issue section of our github page.
          </p>
          <a class="github-button" href="https://github.com/05dirnbe/NEFI" data-icon="octicon-eye" data-style="mega" data-count-href="/05dirnbe/NEFI/watchers" data-count-api="/repos/05dirnbe/NEFI#subscribers_count" data-count-aria-label="# watchers on GitHub" aria-label="Watch 05dirnbe/NEFI on GitHub">Watch</a>

          <!-- Place this tag where you want the button to render. -->
          <a class="github-button" href="https://github.com/05dirnbe/NEFI/fork" data-icon="octicon-repo-forked" data-style="mega" data-count-href="/05dirnbe/NEFI/network" data-count-api="/repos/05dirnbe/NEFI#forks_count" data-count-aria-label="# forks on GitHub" aria-label="Fork 05dirnbe/NEFI on GitHub">Fork</a><!-- Place this tag in your head or just before your close body tag. -->

          <!-- Place this tag where you want the button to render. -->
          <a class="github-button" href="https://github.com/05dirnbe/NEFI/issues" data-icon="octicon-issue-opened" data-style="mega" data-count-api="/repos/05dirnbe/NEFI#open_issues_count" data-count-aria-label="# issues on GitHub" aria-label="Issue 05dirnbe/NEFI on GitHub">Issue</a>
        </div>
        <div class="text-box">
          <h2 id="installation">Download and Installation</h2>

          <p>NEFI is easy to install. If you are a Mac or Windows user, simply go to <a href="./download.php">Download</a> and
            download the package for your operating system. The packages listed in the download section
            are complete software deploys. Thus, you simply run NEFI at the click of a button with no additional strings attached.
          </p>

          <p>For linux users and people interested in contribution to NEFI we offer a
            <a href="./documentation/rst_files/Installation.html">detailed explanation</a>
            on how to install NEFI manually. To see a listing of all used technologies and librarys
            please visit our
            <a href="./documentation/rst_files/Technologies.html"> Dependencies </a>
            section.
          </p>

          <p> If you have any trouble during the installation process please contact us by creating
            an issue at our project github page. 
          </p>

          <a class="github-button" href="https://github.com/05dirnbe/NEFI/issues" data-icon="octicon-issue-opened" data-style="mega" data-count-api="/repos/05dirnbe/NEFI#open_issues_count" data-count-aria-label="# issues on GitHub" aria-label="Issue 05dirnbe/NEFI on GitHub">Issue
          </a>    
        </div>
        <div class="text-box">
          <h2 id="mailinglist">Mailing List</h2>

          <p>NEFI is under active delevopment and updated on a regular basis. If you want to be notified
            about major changes and new versions, consider subscribing to our <a href=
                                                                                 "https://lists.mpi-inf.mpg.de/listinfo/NEFI">mailing list</a> hosted at the <a href=
                                                                                                                                                                "http://www.mpi-inf.mpg.de/home/">Max-Planck Institute for Informatics</a>.</p>
        </div>
        
        <div class="text-box">
          <h2 id="citing">How to cite NEFI</h2>

          <p>If you use NEFI in your research, please add a citation. You can use the following BibTex
            entry in your paper.</p>
          
          <pre>
            @article{Dirnberger2015,
            Author = {Dirnberger, M. and Kehl, T. and Neumann, A.},
            Journal = {Scientific Reports},
            Title = {NEFI: Network Extraction From Images},
            Url = {http://dx.doi.org/10.1038/srep15669},
            Volume = {5},
            Year = {2015}
            }</pre>
        </div>
      </div>
    </div><!-- /container -->

  </body>
  <?php include ("./footer.php"); ?>
</html>
