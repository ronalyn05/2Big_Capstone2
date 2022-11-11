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
              <li class="scroll-to-section"><a href="Service.php">Services</a></li>
              <li class="scroll-to-section"><a href="About1.php" class="active">About Us</a></li>
              <li class="scroll-to-section"><a href="Contact1.php">Contact</a></li>
              <li><div class="gradient-button"><a href="login.php"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li> 
<!--               <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
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


<div id="about" class="about-us section">
    <div class="container">
      <div class="row">
       <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
           <h4> THE <em> TEAM<em> </h4>
           <!--  <i>The ones who runs this company</i> -->
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <img src="images/rhea.png" alt="">
                <h4>Project Manager</h4>
                <p> Rhea Mae Trinidad</p>
                <p>Contact: </p> 
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <img src="images/ja.png" alt="">
                <h4>Web Designer</h4>
                <p> Jeahael Suhot</p>
                <p>Contact: </p> 
              </div>
            </div>
              <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <img src="images/rona.jpg" alt="">
                <h4>UI Designer</h4>
                <p> Ronalyn Giducos</p>
                <p>Contact: </p> 
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <img src="images/DC.jpg" alt="">
                <h4>UI Designerr</h4>
                <p> Daisy Limato</p>
                <p>Contact: </p> 
              </div>
            </div>
        </div>
      </div>
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