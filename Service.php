<?php 

session_start();

   include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com"crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>2BiG Services</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
<body>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="images/secLogo.png" width="110" height="60">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="Home1.php">Home</a></li>
              <li class="scroll-to-section"><a href="Service.php" class="active">Services</a></li>
              <li class="scroll-to-section"><a href="About1.php">About Us</a></li>
              <li class="scroll-to-section"><a href="Contact1.php">Contact</a></li>
              <li><div class="gradient-button"><a href="login.php"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
<br> <br>
<br>
<br>

<div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4><em>Amazing Services &amp; Features</em> </h4>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>

<div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>24/7 Help &amp; Support</h4>
             <p>Delivery services and Express Delivery</p>
              <p>Provides reliable and efficient service to residential and commercial customers</p> <br>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>24/7 Help &amp; Support</h4>
           <p>Trace the availability of the gallons, the borrowed gallons of the customers, and the water delivery.<p>
            <

          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div> 
            <h4>24/7 Help &amp; Support</h4>
            <p>Accessible to everyone and provides a more efficient
        service for both the refilling stations and the customers.<p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>24/7 Help &amp; Support</h4>
           <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<hr>
        <div class="text-center">
                          <div class="align-items-center "> 
                            <video autoplay loop muted controls>
                              <source src="EXPLAINER_VIDEO.mp4" type="video/mp4">
                            </video> 
                          </div>
                        </div>
   <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>