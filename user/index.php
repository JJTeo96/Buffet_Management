<?php include_once('header.php');?>
    <style>
    .carousel-inner{
      width:100%;
      max-height: 500px !important;
    }

    </style>
    
    <main role="main">
      <!-- carousel -->
    <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <!-- <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="vendor/img/buffet 6.jpg" class="d-block w-100" alt="..." style="width:100%; height: 500px;">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="vendor/img/buffet 7.jpg" class="d-block w-100" alt="..." style="width:100%; height: 500px;">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div> -->
      </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 <!-- carousel -->
 
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing" style="margin-top:5%">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="vendor/img/indexpackage.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Package</h2>
            <p>Whether it’s a package that’s more pocket friendly, premium buffet that’s great to impress your guests, we have it all covered! Buffet catering great for all your celebrations</p>
            <p><a class="btn btn-secondary" href="package.php" role="button">View details &raquo;</a></p>
          </div>
          
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="vendor/img/indexpromo.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Promotion</h2>
            <p>Up to 20% off, and other discounts you wouldn’t want to miss!</p>
            <br/>
            <br/>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container" style="margin-top:5%">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2019-2019 By JJ</p>
      </footer>
    </main>
  </body>
</html>
