<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PDShop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css'); ?>">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
        <!-- owl carousel-->
        <link rel="stylesheet" href="<?php echo base_url('vendor/owl.carousel/assets/owl.carousel.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendor/owl.carousel/assets/owl.theme.default.css'); ?>">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="<?php echo base_url('css/style.default.css'); ?>" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="<?php echo base_url('css/custom.css'); ?>">
        <!-- Favicon-->
        <link rel="stylesheet" href="<?php echo base_url('favicon.png'); ?>">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <style>
      
    </style>
    <body>
      <!-- navbar-->
      <header class="header mb-5">
        <nav class="navbar navbar-expand-lg">
          <div class="container"><a href="<?php echo base_url('/Home');?>" class="navbar-brand home"><img src="<?php echo base_url('img/logo.png');?>" alt="PDShop logo" class="d-none d-md-inline-block"><img src="<?php echo base_url('img/logo.png');?>" alt="PDShop logo" class="d-inline-block d-md-none"><span class="sr-only">PDShop</span></a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
              <a href="<?php echo base_url('/ShoppingCart');?>" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i><span>(<?php echo $tc;?>)</span></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="<?php echo base_url('/Home');?>" class="nav-link">Home</a></li>
              </ul>
              <div class="navbar-buttons d-flex justify-content-end">
                <!-- /.nav-collapse-->
                <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
                <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="<?php echo base_url('/ShoppingCart');?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i><span>(<?php echo $tc;?>)</span></a></div>
              </div>
            </div>
          </div>
        </nav>
        <div id="search" class="collapse">
          <div class="container">
            <form role="search" class="ml-auto">
              <div class="input-group">
                <input type="text" placeholder="Search" class="form-control">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </header>
      <div id="all">
        <div id="content">
          <?= $this->renderSection('content') ?>
        </div>
      </div>
      
      <!--
      *** FOOTER ***
      _________________________________________________________
      -->
      <div id="footer">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-3 col-md-6">
              <h4 class="mb-3">Where to find us</h4>
              <p><strong>PDShop</strong><br>Jl. Lemahneundeut No. 11<br>Sukawarna, Sukajadi<br>Kota Bandung, 4 0 3 1 1<br>Jawa Barat<br><strong>Indonesia</strong></p>
              <hr class="d-block d-md-none">
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
              <hr>
              <h4 class="mb-3">Stay in touch</h4>
              <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class="email external"><i class="fa fa-envelope"></i></a></p>
            </div>
            <!-- /.col-lg-3-->
          </div>
          <!-- /.row-->
        </div>
        <!-- /.container-->
      </div>
      <!-- /#footer-->
      <!-- *** FOOTER END ***-->
      
      
      <!--
      *** COPYRIGHT ***
      _________________________________________________________
      -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-2 mb-lg-0">
              <p class="text-center text-lg-left">©2020 PDShop.</p>
            </div>
            <div class="col-lg-6">
              <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/">Bootstrapious</a>
                <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- *** COPYRIGHT END ***-->
      <!-- JavaScript files-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
      <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
      <script src="js/front.js"></script>
      <script>
        $('.export').on("click",function() {
window.location = "<?php echo base_url("PenjualanController/exportExcel"); ?>";
});
      </script>
    </body>
</html>