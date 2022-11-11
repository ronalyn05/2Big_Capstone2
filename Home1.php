<?php 

session_start();

   include("connection.php");
  // $user_data = check_login($con); 


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>2BiG</title>

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
    <div class="container ">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->  
            <a href="Home1.php" class="logo">
              <img src="images/secLogo.png" width="110" height="60">
            </a>  

            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="Home1.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="Service.php">Services</a></li>
              <li class="scroll-to-section"><a href="About1.php">About Us</a></li>
              <li class="scroll-to-section"><a href="Contact1.php">Contact</a></li>
              <li ><div class="gradient-button"><a href="login.php"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li>
                       
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

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>2BiG boost your Water Refilling Station sales and attract new customers!</h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button scroll-to-section">
                      <a href="#contact">Download Mobile App <i class="fab fa-google-play"></i></a>                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="Logo.gif" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

 

   <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>We Have The Best Pre-Order <em>Price</em> You Can Get</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <span class="price">30,000</span>
            <h4>Business Plan App</h4>
            <div class="icon">
              <img src="assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>
              <li>Basta magsabot pa</li>
              <li>50 TB of Storage</li>
              <li>Life-time Support</li>
              <li>Premium Add-Ons</li>
              <li class="non-function">Fastest Network</li>
              <li class="non-function">More Options</li>
            </ul>
            <div class="border-button">
              <a href="#">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Be part of TecNique Company</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="registration.php" method="GET">
              <div class="col-lg-20 col-sm-20">
                <fieldset>
                  <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                </fieldset>
              </div>
            </div>
          </form>
          <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022. All Rights Reserved. 
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>

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