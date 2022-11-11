<!DOCTYPE html>
<html lang="en">

<head>
    <title>2BiG Admin </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
            <!-- Favicon icon -->
      <link rel="icon" href="images/FinalLogo.PNG" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">

      <style>
        .divider{
         background: linear-gradient(100deg, white 0%, rgba(66, 135, 245) 100%, rgba(66, 135, 245) 80%);
        width: 100%;
        height: 6px;
            }
        .background {
         background-color: white;
        }

        .Lightblue-background {
    background-color: #9CE6F7;
        }

        .bodytext{
        font-family: "Nunito Sans", "Arial", sans-serif;
        font-weight: normal;
       line-height: 1.5;
       color: #00053e;
        }

        .grid-container{
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
max-width: 75rem;
        }
        .videosize{
          width: 100%;
        }
        .texts{
          font-size: 200%;
          line-height: 1.6;
          font-weight: 500;
 color: #001242;
          font-family: "Nunito Sans", "Arial", sans-serif;
        }
    .h2 {
    font-family: "Nunito Sans", "Arial", sans-serif;
    text-transform: uppercase;
    line-height: normal;
    font-weight: 100;
    color: #001242;
    font-size: 400%;
  }
      .h3 {
    font-family: "Nunito Sans", "Arial", sans-serif;
    text-transform: uppercase;
    line-height: normal;
    font-weight: 200;
    color: #001242;
    font-size: 280%;
  }
        .h4 {
    font-family: "Nunito Sans", "Arial", sans-serif;
    text-transform: uppercase;
    line-height: normal;
    font-weight: 200;
    color: #001242;
    font-size: 150%;
  }
        .h5 {
    font-family: "Nunito Sans", "Arial", sans-serif;
    text-transform: uppercase;
    line-height: normal;
    font-weight: 200;
    color: #001242;
    font-size: 100%;
  }
          .h6 {
    font-family: "Nunito Sans", "Arial", sans-serif;
    line-height: normal;
    font-weight: 200;
    color: #001242;
    font-size: 100%;
  }
          .h7 {
    font-family: "Nunito Sans", "Arial", sans-serif;
    line-height: normal;
    font-weight: 100;
    color: #001242;
    font-size: 50%;
  }
      .h1 {
    font-family: "Nunito Sans", "Arial", sans-serif;
    text-transform: uppercase;
    line-height: normal;
    font-weight: 200;
    color: #001242;
    font-size: 650%;
      }
        .verticalLine {
            height: 200px;
            border-right: 7px solid #001242;
            position: absolute;
            right: 50%;
        }
        .secbackground{
          background-image: url('images/FinalLogo.png');
          background-repeat: no-repeat;
          background-size: cover;

        }
          .teal-gradient {
              background: #00A8E4;
              background: linear-gradient(180deg, #00a8e4 0%, #9ce6f7 70%, #e7f6fd 100%);
          }
          .orange-gradient{
              background: #7ADBF0;
              background: linear-gradient(180deg, #7ADBF0 0%, #9AE8F9 70%, #D0F1F9 100%);
          }
          .button {
              text-transform: uppercase;
              text-decoration: none;
              font-weight: 700;
              border-radius: 50px;
          }
          .margin-0 {
              margin-top: 0rem !important;
              margin-right: 0rem !important;
              margin-bottom: 0rem !important;
              margin-left: 0rem !important;
          }
      </style>
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">

                  <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                        <li>
                            <div class="text-center"> 
                              <img src="images/secLogo.png" style="width:170px" alt="logo.png">
                            </div>
                        </li>
                      </ul>
                      <ul class="nav-right">
                          <li>
                            <a href="#why2big" class="waves-effect waves-light">2BiG </a>
                          </li>
                          <li>
                            <a href="#services" class="waves-effect waves-light"> Services </a>
                          </li>
                          <li>
                            <a href="#theteam" class="waves-effect waves-light"> The Team </a>
                          </li>
                          <li>
                            <a href="#stations" class="waves-effect waves-light"> Refilling Stations </a>
                          </li>
                          <li class="user-profile header-notification">
                            <a href="#" class="waves-effect waves-light">
                            <span> Account </span> 
                             <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                              <li class="waves-effect waves-light">
                                      <a href="CreateAcc.php">
                                          Create Account
                                      </a>
                              </li>
                              <li class="waves-effect waves-light">
                                      <a href="Login.php">
                                           Login Account
                                      </a>
                              </li>
                            </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container background">
              <div class="pcoded-wrapper">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h3 class="m-b-0 text-center"></h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Page-header end -->
                      <!-- MAIN CONTENT -->
                      <section>
                        <div class="h1">
                          <h1 class="text-center"> <br>
                            2BiG: Water Refilling Station Management System 
                          </h1>
                        </div>  
                        <br>
                        <div class="row">

                          <div class="col-sm-4 text-right">
                        <img src="images/innovation.PNG" style="width:70%">
                          </div>                          
                          <div class="col-sm-4">
                        <img src="images/FinalLogo.PNG" style="width:110%">
                          </div>
                          <div class="col-sm-4">
                        <img src="images/Growth.PNG" style="width:70%">
                          </div>
                        </div>

                       <div>
                            <h1 class="h3 text-center">
                                 Grow your business with 2BiG!
                            </h1>
                       </div>
                          </section>
                      <section> 
                        <!-- <img src="images/FinalLogo.PNG" style="width:40%"> -->

                          <div class="form-group form-primary">
                           <!-- <h1 class="h1">
                              <a name="why2big"> </a>
                              2BiG
                            </h1> -->
                          </div>
                            <div class="text-center">
                             <h2 class="texts">
                              Having innovations that could grow your business should be a no-brainer. <br> That's when 2BiG comes in. <br> Join our community now and let's start growing your business.<br>
                              <!--
                            A platform that provides efficient business management. <br>This platform aims to increase productivity to the business <br>and provide quality services for both business owners and customers.  -->                                             
                             </h2>
                            </div>
                        <div class="text-center">
                          <div class="align-items-center "> 
                            <video autoplay loop muted controls>
                              <source src="EXPLAINER_VIDEO.mp4" type="video/mp4">
                            </video> 
                          </div>
                        </div>
                      <a name="why2big"> </a>
                      </section>   <br><br> 
                      <!-- WHY 2BIG?-->
                      <section class="cell medium-8 orange-gradient padding-vertical-4">

                       <div>
                            <h1 class="h3 text-center">
                                <br> Why choose 2BiG ? <br>
                            </h1>
                       </div><br>
                       <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-primary">
                            <p class="h2 text-right">
                               ACCURATE
                            </p>
                            <h1 class="h3 text-right">
                               SALES AND <br> REPORTS
                            </h1>
                          </div>
                        </div>
                            <div class="verticalLine">
                             </div>
                        <div class="col-sm-6">
                          <div class="form-group form-primary">
                            <p class="h2 text-left">
                              EFFICIENT
                            </p>
                            <p class="h3 text-left">
                              BUSINESS <br> OPERATIONS <br><br>
                            </p>
                          </div>
                        </div>
                       </div>
                            <div class="text-center">
                             <h2 class="texts">
                            A platform that provides efficient business management. <br>This platform aims to increase productivity to the business <br>and provide quality services for both business owners and customers.                                               
                              </h2>
                            </div>
                                 <div cell small-24 class="text-center h4"> <br>
                                    <a href="#subscription" class="button" style="color:darkblue;font-size: 25px;background-color: pink;padding: 6px;">
                                      SUBSCRIBE
                                      <!--
                                      <img src="images/playstore.PNG" style="width:80px"> <br>
                                      Download <br> 2BiG Mobile ! <br> <br> -->
                                    </a>
                                 </div>
                                 <br>
                      </section>
                      <!-- SERVICES-->
                      <section class="cell medium-8 padding-vertical-4">
                      <a name="services"> </a>
                       <div>
                            <h1 class="h3 text-center">
                                <br> SERVICES <br>
                            </h1>
                       </div>
                       <br>
                      <div class="container-fluid">
                            <div class="row">
                              <div class="col-sm-3" style="background-color: pink;">
                                <div class="">
                                  <div class="text-center">
                                <img src="images/delivery.PNG" style="width:50%">
                                  </div>
                                  <p class="h3 text-center">DELIVERY</p>
                                    <h2 class="texts text-center " style="font-size:20px;">Provides reliable and efficient service to residential and commercial customers</h2> <br>
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <div class="service-item second-service">
                                  <div class="text-center">
                                <img src="images/orders.PNG" style="width:50%">
                                  </div>
                                  <p class="h3 text-center">ONLINE ORDER</p>
                                 <h2 class="texts text-center" style="font-size:20px;">
                                   Online ordering is critical for your business’ success, By using 2BiG, you are building an online presence that would attract more potential customers for your water refilling business.
                                 </h2>
                                </div>
                              </div>
                              <div class="col-sm-3" style="background-color: pink;">
                                <div class="service-item second-service">
                                  <div class="text-center">
                                <img src="images/monitor.PNG" style="width:50%">
                                  </div>
                                  <p class="h3 text-center">MONITORING</p>
                                 <h2 class="texts text-center" style="font-size:20px;">
                                   2BiG allows you to track all orders in real-time. You can also monitor your delivery locations and your sales & reports. 
                                 </h2>
                                </div>
                              </div>
                              <div class="col-sm-3" style="background-color: white;">
                                <div class="service-item second-service">
                                  <div class="text-center">
                                <img src="images/reports.PNG" style="width:50%">
                                  </div>
                                  <p class="h3 text-center">REPORTS</p>
                                 <h2 class="texts text-center" style="font-size:20px;">
                                   2BiG gives you accurate and real-time reports on your sales, deliveries, customers and etc. 
                                 </h2>
                                </div>
                              </div>
                            </div>
                      </div>
                      </section> 


                      <div class="text-center page-block ">
                        <section class="cell medium-8 teal-gradient padding-vertical-4">
                          <div class="row">
                            <div class="col-sm-4">
                              <ul class="nav-left">
                                <li> <br>
                                 <div class="text-right"> 
                                  <img src="images/water.cartoon.png" style="width:320px" alt="logo.png">
                                 </div>

                                </li>
                              </ul>
                            </div>

                            <div class="col-sm-4">
                              <br><br><br><br>
                                 <div cell small-24 class="text-center">
                                    <a href="#subscription" class="button" style="color:darkblue;font-size: 25px;background-color: pink;padding: 6px;">
                                      SUBSCRIBE TO 2BIG NOW!
                                      <!--
                                      <img src="images/playstore.PNG" style="width:80px"> <br>
                                      Download <br> 2BiG Mobile ! <br> <br> -->
                                    </a>
                                 </div> 
                            </div>                            
                            <div class="col-sm-4">
                              <ul class="nav-left">
                                <li>
                                 <div class="text-left"> 
                                  <h6 style="color:black;font-size: 100%;" class=""> <br><br> <br><br><br>
                                    <a class="h3">
                                      Boost
                                    </a>
                                    <a class="h4">
                                      your
                                    </a>
                                    <a class="h3">
                                      Water Refilling Business 
                                    </a>
                                    <a class="h4"> <br> 
                                      now,  and attract new <br>
                                    </a>  
                                    <a class="h3">
                                      Loyal Customers!
                                    </a>                                  
                                  </h6>
                                 </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </section>
                      <a name="theteam"> </a>
                      </section class="login-block">
                      <!-- WHY 2BIG?-->
                      <section class="cell medium-8 orange-gradient padding-vertical-4">
                       <div>
                            <h1 class="h3 text-center">
                                <br> THE TEAM BEHIND 2BIG <br>
                            </h1>
                       </div><br>
                      <div class="container-fluid ">
                          <div class="row">
                              <div class="col-sm-3">
                              </div>
                              <div class="col-sm-3">
                                <div class="">
                                  <div class="text-center"> <br>
                                    <img src="images/rhea.PNG" style="width:50%">
                                  </div> <br>
                                  <p class="h4 text-center">RHEA MAE TRINIDAD</p>
                                    <h2 class="texts text-center " style="font-size:16px;">PROJECT MANAGER </h2>
                                   
                                    <a href="" class="button h6">
                                      <i class="ti-email"></i>
                                      Contact
                                    </a>   
                                </div>
                              </div>
                              <div class="col-sm-3" >
                                <div class="">
                                  <div class="text-center"> <br>
                                <img src="images/ja.PNG" style="width:50%">
                                  </div> <br>
                                  <p class="h4 text-center">Jeahael Suhot</p>
                                    <h2 class="texts text-center " style="font-size:16px;">SOFTWARE ENGINEER </h2> 

                                    <a href="" class="button h6">
                                      <i class="ti-email"></i>
                                      Contact
                                    </a>
                                </div>
                              </div>
                              <div class="col-sm-3">
                              </div>                                                          
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                              </div>
                              <div class="col-sm-3">
                                <div class="">
                                  <div class="text-center"> <br>
                                <img src="images/rona.jpg" style="width:50%">
                                  </div> <br>
                                  <p class="h4 text-center">RONALYN GIDUCOS</p>
                                    <h2 class="texts text-center " style="font-size:16px;">UI DESIGNER </h2> 
                                    <a href="" class="button h6">
                                      <i class="ti-email"></i>
                                      Contact
                                    </a>
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <div class="">
                                  <div class="text-center"> <br>
                                <img src="images/DC.jpg" style="width:50%">
                                  </div> <br>
                                  <p class="h4 text-center">DAISY LIMATO</p>
                                    <h2 class="texts text-center " style="font-size:16px;">UI DESIGNER</h2> 
                                    <a href="" class="button h6">
                                      <i class="ti-email"></i>
                                      Contact
                                    </a>
                                </div>
                              </div>
                              <div class="col-sm-3">
                              </div>                                                           
                            </div>
                      </div> <br>
                      </section>

                      <!-- SUBSCRIPTION-->
                      <section class="cell medium-8 padding-vertical-4">
                      <a name="subscription"> </a>
                       <div>
                            <h1 class="h3 text-center">
                                <br> SUBSCRIPTION <br>
                            </h1>
                       </div>
                       <br>
                      <div class="container-fluid">
                            <div class="row">
                              <div class="col-sm-3" style="background-color: white;">
                              </div>

                              <div class="col-sm-3" style="background-color: pink;">
                                <div class="">
                                  <div class="text-center">
                                <img src="images/delivery.PNG" style="width:50%">
                                  </div>
                                  <p class="h3 text-center">BASIC PLAN</p>
                                    <h2 class="texts text-center " style="font-size:20px;">Provides reliable and efficient service to residential and </h2> <br>
                                 <div cell small-24 class="text-center">
                                    <a href="#subscription" class="button" style="color:darkblue;font-size: 18px;background-color: lightskyblue;padding: 10px;">
                                      SUBSCRIBE
                                    </a>
                                 </div> <br>
                                </div>
                              </div>


                              <div class="col-sm-3" style="background-color: lightskyblue;">
                                <div class="service-item second-service">
                                  <div class="text-center">
                                <img src="images/orders.PNG" style="width:50%">
                                  </div>
                                  <p class="h3 text-center">PREMIUM PLAN</p>
                                 <h2 class="texts text-center" style="font-size:20px;">
                                   Online ordering is critical for your business’ success. 
                                 </h2> <br>
                                 <div cell small-24 class="text-center">
                                    <a href="#subscription" class="button" style="color:darkblue;font-size: 18px;background-color: pink;padding: 10px;">
                                      SUBSCRIBE
                                    </a>
                                 </div> 
                                </div>
                              </div>

                              <div class="col-sm-3" style="background-color: white;">
                                <div class="service-item second-service">
                                </div>
                              </div>
                                                                                                            
                            </div>
                      </div>
                      </section> 
                        <section class="cell medium-8 teal-gradient padding-vertical-4">
                          <div class="row">
                            <div class="col-sm-4">
                              <ul class="nav-left">
                                <li> <br>
                                 <div class="text-right"> 
                                  <img src="images/water.cartoon.png" style="width:320px" alt="logo.png">
                                 </div>

                                </li>
                              </ul>
                            </div>

                            <div class="col-sm-4">
                              <br><br><br><br>
                                 <div cell small-24 class="text-center">
                                    <a href="https://play.google.com/store/games" class="button" style="color:darkblue;font-size: 25px;padding: 6px;">
                                      <!-- SUBSCRIBE TO 2BIG NOW!-->
                                      
                                      <img src="images/playstore.PNG" style="width:80px"> <br>
                                      Download <br> 2BiG Mobile ! <br> <br> 
                                    </a>
                                 </div> 
                            </div>                            
                            <div class="col-sm-4">
                              <ul class="nav-left">
                                <li>
                                 <div class="text-left"> 
                                  <h6 style="color:black;font-size: 100%;" class=""> <br><br> <br><br><br>
                                    <a class="h3">
                                      Boost
                                    </a>
                                    <a class="h4">
                                      your
                                    </a>
                                    <a class="h3">
                                      Water Refilling Business 
                                    </a>
                                    <a class="h4"> <br> 
                                      now,  and attract new <br>
                                    </a>  
                                    <a class="h3">
                                      Loyal Customers!
                                    </a>                                  
                                  </h6>
                                 </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </section>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="assets/pages/widget/amchart/gauge.js"></script>
    <script src="assets/pages/widget/amchart/serial.js"></script>
    <script src="assets/pages/widget/amchart/light.js"></script>
    <script src="assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
