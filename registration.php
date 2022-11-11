<?php include_once ("controllers.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="login" style="background-image: url('production/1.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="align-items-center "> 
                            <img src="images/FinalLogo.png" width="600" height="130">
                            <h1 style="color: #00348d"><i class="fa fa-tint fa-spin"></i><img src="images/watergallon.png" width="110" height="70"> Water Refilling Management System </h1>
                        </div> 

    <div id="container">
        <h2>Register Here</h2>
        <div id="line"></div>
        <form action="registration.php" method="POST" autocomplete="off">
             <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            } 
            ?> 
            <input type="text" name="first_name" class="name" placeholder="First Name" required>
            <input type="text" name="mid_name" class="name" placeholder="Middle Name">
            <input type="text" name="last_name" class="name" placeholder="Last Name" required>
            <input type="text" name="user_name" class="name" placeholder="User Name" required>
            <input type="text" name="address" class="address" placeholder="Address" required><br>
            <input type="number" name="contact_num" class="contactnum" placeholder="Contact Number" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="con_pass" placeholder="Confirm Password" required><br>
            <label for="proof" style="text ; color: blue; "><h4>Upload proof of your WRS legitimacy here</h4></label>
            <input type="file" name="image" class="text-center center-block file-upload">
            <br>
                <label><h4>By creating an account you agree to our <a href="Terms.php"> Terms & Privacy.</h4></label>
            <input type="submit" name="signup" value="Sign Up">
        </form>
        <h3>Already have an account? <a href="login.php">Login</a></h3>
    </div>
</body>
</html>