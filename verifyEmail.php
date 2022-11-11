<?php include_once ("controllers.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="css/otp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="login" style="background-image: url('production/1.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="align-items-center "> 
                            <img src="images/FinalLogo.png" width="600" height="130">
                            <h1 style="color: #00348d"><i class="fa fa-tint fa-spin"></i><img src="images/watergallon.png" width="110" height="70"> Water Refilling Management System </h1>
                        </div> 
    <div id="container">
        <h2>Email</h2>
        <div id="line"></div>
        <form action="verifyEmail.php" method="POST" autocomplete="off">
            <?php
            if(isset($_SESSION['message'])){
                ?>
                <div id="alert"><?php echo $_SESSION['message']; ?></div>
                <?php
            }
            ?>

            <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?>      
            <input type="number" name="OTPverify" placeholder="Verification Code" required><br>
            <input type="submit" name="verifyEmail" value="Verify">
        </form>
    </div>
</body>
</html>