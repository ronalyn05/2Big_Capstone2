<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Water Refilling System | </title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md ">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title " style="border: 0; background-color: #1f59dc" >
              <a href="dashboard.php" class="site_title"><i class="fa fa-tint fa-spin"></i> <span>WRS Management</span></a>
            </div>

            <div class="clearfix"></div>           

            <!-- menu profile quick info -->
            <div class="logo clearfix">
              <div class="logo">
                <img class="img-fluid" src="FinalLogo.png" alt="Theme-Logo" style="width:200px">
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
          <div class="">

            <div class="clearfix"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".add"><i class="fa fa-plus"></i> Add</button></div>
                <div class="modal fade add" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabel2">Add Payment</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_content">
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <select class="form-control">
                            <option>Delivery No.</option>
                            <option>1000001</option>
                            <option>1000002</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <input  required="required" class="form-control" type="text" placeholder="-              OR No.              -">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-5 col-sm-5">
                          <input  required="required" class="form-control" type="number" placeholder="Amt.">
                        </div>
                        <div class="col-md-7 col-sm-7 ">
                          <select class="form-control">
                            <option>Customer</option>
                            <option>Data</option>
                            <option>Data</option>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="margin-right: 46%"><i class="fa fa-times"></i>Close</button>
                          <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Save</button>
                        </div>
                         </form>
                      </div>
                    </div>
                  </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Payment <small>Table</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <div class="row">
              <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                         <tr>
                          <th style="width:15%">Delivery No.</th>
                          <th style="width: 14%">Or No.</th>
                          <th style="width: 5%">Amt.</th>
                          <th style="width: 20%">Costumer</th>
                          <th style="width: 15%">Date Recorded</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1000001</td>
                          <td>111-2222222</td>
                          <td align="center">300</td>
                          <td >Javier Cruz</td>
                          <td>October 17, 2022</td>
                          <td align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                        </tr>
                        <tr>
                          <td>1000002</td>
                          <td>949494-4444</td>
                          <td align="center">300</td>
                          <td >Reynaldo Aroyo</td>
                          <td>October 17, 2022</td>
                          <td align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                         <th style="width:15%">Delivery No.</th>
                          <th style="width: 14%">Or No.</th>
                          <th style="width: 5%">Amt.</th>
                          <th style="width: 20%">Costumer</th>
                          <th style="width: 15%">Date Recorded</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </tbody>
                    </table>
      <div class="modal fade edit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabel2">Edit Payment</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_content">
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <select class="form-control">
                            <option>Delivery No.</option>
                            <option>1000001</option>
                            <option>1000002</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-12 col-sm-12 ">
                          <input  required="required" class="form-control" type="text" placeholder="-              OR No.              -">
                        </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-5 col-sm-5">
                          <input  required="required" class="form-control" type="number" placeholder="Amt.">
                        </div>
                        <div class="col-md-7 col-sm-7 ">
                          <select class="form-control">
                            <option>Customer</option>
                            <option>Data</option>
                            <option>Data</option>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="margin-right: 46%"><i class="fa fa-times"></i>Close</button>
                          <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Save</button>
                        </div>
                         </form>
                      </div>
                    </div>
                  </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

          
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            2Big Water Refilling Management System by<a href="About.php">Technique</a>
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>