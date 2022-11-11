  <?php

  include("connection.php");

    session_start();

  if(!isset($_SESSION['email'])){
  header("location: dashboard.php");
}
 
  //fetching data from its database and display 
    $user = $_SESSION['email'];
    $get_user = "SELECT * FROM user where email='$user'";
    $run_user = mysqli_query($conn,$get_user);
    $row = mysqli_fetch_array($run_user);

    $user_name = $row['user_name'];

    $user_id = $row['user_id'];

    //update user data
    if(isset($_POST['update']))
{
    //$user_id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
    $mid_name = $_POST['mid_name'];
    $last_name = $_POST['last_name'];
    $contact_num= $_POST['contact_num'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $con_pass = $_POST['con_pass'];

     $updateQuery = "UPDATE user SET first_name = '$first_name', mid_name = '$mid_name', last_name = '$last_name', contact_num = '$contact_num', email = '$email', address = '$address', password='$password', con_pass='$con_pass' WHERE user_id = '$user_id' ";

    $query_run = mysqli_query($conn, $updateQuery);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        //header("Location: dashboard.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        //header("Location: dashboard.php");
    }
}


?>

<!DOCTYPE html>
<html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<head>
  <title><?php echo "$user_name"; ?></title>
<script type="text/javascript">
  $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>                       
<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>My Profile</h1></div>
        <div class="col-sm-2"><img title="profile image" class="img-circle img-responsive" src="images/FinalLogo.PNG" alt="Theme-Logo" style="width:200px"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
              

      <div class="text-center">       
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h4 style="text ; color: blue; "><?php echo "$user_name"; ?></h4>
        <h6>Upload photo here...</h6>
        <input type="file" name="image" class="text-center center-block file-upload">
      </div></hr><br>
         
        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#about">About</a></li>
                <li><a data-toggle="tab" href="#editprofile">Edit Profile</a></li>
              </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="POST" id="registrationForm">
                      <div class="form-group">                
                        <div class="col-xs-12">
                              <h4><strong>Firstname: </strong> <?php echo $row["first_name"];?></h4>  <br>
                            <h4><strong>Middlename: </strong> <?php echo $row["mid_name"];?></h4><br>
                            <h4><strong>Lastname: </strong> <?php echo $row["last_name"];?></h4><br>
                             <h4><strong>Contact number: </strong> <?php echo $row["contact_num"];?></h4><br> 
                              <h4><strong>Email Address: </strong> <?php echo $row["email"];?></h4><br>  
                               <h4><strong>Address: </strong> <?php echo $row["address"];?></h4><br>  
                                <h4><strong>Member Since: </strong> <?php echo $row["date"];?></h4><br>
                                <h4><strong>Status: </strong> <?php echo $row["status"];?></h4><br>                 
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                 <button class="btn btn-lg btn-outline-danger pull-right" style=" color: #FA8072; border-color: #FA8072 " type="close"><a href="dashboard.php"><i class="glyphicon glyphicon-backward"></i>Exit  </a> </button>
                            </div>
                      </div>

                </form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="about">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="POST" id="registrationForm1">
                      <div class="form-group">                
                        <div class="col-xs-12">
                              <h4><strong>Firstname: </strong> <?php echo $row["first_name"];?></h4>  <br>
                            <h4><strong>Middlename: </strong> <?php echo $row["mid_name"];?></h4><br>
                            <h4><strong>Lastname: </strong> <?php echo $row["last_name"];?></h4><br>
                             <h4><strong>Contact number: </strong> <?php echo $row["contact_num"];?></h4><br> 
                              <h4><strong>Email Address: </strong> <?php echo $row["email"];?></h4><br>  
                               <h4><strong>Address: </strong> <?php echo $row["address"];?></h4><br>  
                                <h4><strong>Member Since: </strong> <?php echo $row["date"];?></h4><br>   
                                <h4><strong>Status: </strong> <?php echo $row["status"];?></h4><br>    
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                 <button class="btn btn-lg btn-outline-danger pull-right" style=" color: #FA8072; border-color: #FA8072 " type="close"><a href="dashboard.php"><i class="glyphicon glyphicon-backward"></i>Exit  </a> </button>
                            </div>
                      </div>
                </form>

               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="editprofile">
                    
                
                  <hr>
                  <form class="form" action="##" method="POST" id="registrationForm2">
                  <div class="form-group">                         
                          <div class="col-xs-6">
                              <label for="firstname"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="firstname" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">                          
                          <div class="col-xs-6">
                            <label for="lastname"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="lastname" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>         
                      <div class="form-group">                         
                          <div class="col-xs-6">
                              <label for="mid_name"><h4>Middle Name (Optional)</h4></label>
                              <input type="text" class="form-control" name="mid_name" id="mid_name" placeholder="enter middle name " title="enter your middle name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="contactno"><h4>Mobile</h4></label>
                              <input type="number" class="form-control" name="contact_num"  
                              <?php if(isset($_POST['update']))
                              {
                                 $query = "UPDATE user SET contact_num = '$contact_num' WHERE user_id = '$user_id' ";
                                $query_run = mysqli_query($conn, $query);

                                if($query_run)
                                {
                                    $_SESSION['status'] = "Data Updated Successfully";
                                    //header("Location: dashboard.php");
                                }
                                else
                                {
                                    $_SESSION['status'] = "Not Updated";
                                    //header("Location: dashboard.php");
                                }
                              }
?> id="contactno" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                         <div class="form-group">                 <div class="col-xs-6">
                              <label for="address"><h4>Address</h4></label>
                              <input type="address" class="form-control" id="address" name="address" placeholder="enter address" title="enter your address">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">           
                            </div> 
                      </div>
                      <div class="form-group">                         
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="con_pass" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <!--<input type="submit" name="update" value="Update Profile">-->
                               <button class="btn btn-lg btn-success pull-left" type="submit" name="update"><i class="glyphicon glyphicon-ok-sign"></i> Update Profile</button>
                                 <button class="btn btn-lg btn-outline-danger pull-right" style=" color: #FA8072; border-color: #FA8072 " type="close"><a href="dashboard.php"><i class="glyphicon glyphicon-backward"></i>Exit  </a> </button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

     </body>
</html>
