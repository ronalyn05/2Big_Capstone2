<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Water Refilling System | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md ">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title " style="border: 0; background-color: #1f59dc" >
              <a href="dashboard.php" class="site_title"><i class="fa fa-tint fa-spin"></i>2BIG: WRS</a>
            </div>

            <div class="clearfix"></div>           

            <!-- menu profile quick info -->
            <div class="logo clearfix">
              <div class="logo">
                <img class="img-fluid" src="FinalLogo.png" alt="Theme-Logo" style="width:200px"></i>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>MAIN</h3>
                <ul class="nav side-menu">
                  <li class="active"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li><a href="pointofsale.php"><i class="fa fa-bar-chart-o"></i> Point of Sale</a>
                  </li>
                  <li ><a href="salescategory.php"><i class="fa fa-book"></i> Reports</a>
                  </li>
                </ul>
                <h3>MANAGEMENT</h3>
                <ul class="nav side-menu">
                  <li ><a href="Profile.php"><i class="fa fa-user"></i> Profile</a>
                  </li>
                  <li><a href="user.php"><i class="fa fa-user"></i> Employee Records</a>
                  </li>                                    
                  <li><a href="orders.php"><i class="fa fa-book"></i> Water Orders</a>
                  </li>
                  <li><a><i class="fa fa-info-circle"></i> Deliveries <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="deliveryrecord.php">Delivery Record</a></li>
                      <li><a href="deliverydetails.php">Delivery Details</a></li>
                    </ul>
                  </li>
                  <li><a href="reservation.php"><i class="fa fa-list-alt"></i> Reservation</a>
                  </li>
                  <li><a href="refillStation.php"><i class="fa fa-bar-chart-o"></i> Refilling Station</a>
                  </li>
                   <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="product.php">Products</a></li>
                      <li><a href="payment.php">Payment</a></li>
                      </ul>
                  </li>
                </ul>
                <h3>CUSTOMER</h3>
                <ul class="nav side-menu">
                   <li><a href="reviews.php"><i class="fa fa-pencil-square-o"></i> Reviews</a>
                  </li>
                  <li ><a href="customer.php"><i class="fa fa-list-alt"></i> List and Graphs</a>
                  <li><a href="loyaltyProgram.php"><i class="fa fa-trophy"></i> Loyalty Program</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" style="background-color:#1f59dc; color: white">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right" style="color: white">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/rhea.png" alt=""><h7 style="color: white">Admin1</h7>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" style="background-color: #2a3f54; color: white" href="settings.php"><i class="fa fa-cog pull-right"></i> Settings
                                      </a>
                                      <a class="dropdown-item" style="background-color: #2a3f54; color: white" href="../messages.php"><i class="fa fa-comment pull-right"></i> My Messages
                                      </a>
                                      <a class="dropdown-item" style="background-color: #2a3f54; color: white" href="Profile.php"><i class="fa fa-user pull-right"></i> Profile
                                      </a>
                    <a class="dropdown-item" style="background-color: #2a3f54; color: white" href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count" style="width: 170%">
            <div class="animated flipInY col-md-4">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">179</div>
                  <h3>Total Customer</h3>
                  <p>____________________________</p>
                </div>
              </div>
            <div class="animated flipInY col-md-4">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count">11,000</div>
                  <h3>Total Income</h3>
                  <p>_______________________</p>
                </div>
              </div>
            <div class="animated flipInY col-md-4">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                  <div class="count">19</div>
                  <h3>Total Products</h3>
                  <p>__________________________</p>
                </div>
              </div>
          </div>
        </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          2BIG: Water Refilling Station Management System by <a href="technique@gmail.com">Technique</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
