<?php include_once ("controllers.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
   <!-- <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="login" style="background-image: url('production/1.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
                          <div class="align-items-center "> 
                            <img src="images/FinalLogo.png" width="750" height="200">
                            <h1 style="color: #00348d"><i class="fa fa-tint fa-spin"></i><img src="images/watergallon.png" width="110" height="70"> Water Refilling Management System </h1>
                        </div>            
<div id="container">
    <h2> Login </h2>

        <div id="line"></div>
        <form action="login.php" method="POST" autocomplete="off">
        <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?>         
            <!--<input type="email" name="email" placeholder="Email"><br> -->
            <input type="email" name="email" autofocus="" autocapitalize="none" autocomplete="email" placeholder="Email" required="" id="id_email">
            <!--<input type="password" name="password" placeholder="Password"><br>-->
             <input type="password" name="password" autocomplete="current-password" placeholder="Password" required="" id="id_password">
                <i class="fa fa-eye" id="togglePassword" style=" cursor: pointer;"></i>
           <!-- <i class="fa fa-eye-slash" aria-hidden="true" id ="eye" onclick="toggle()"></i>-->
      
            <script>
                const togglePassword = document.querySelector('#togglePassword');
                const password = document.querySelector('#id_password');
                togglePassword.addEventListener('click', function (e) 
            {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye slash icon
                this.classList.toggle('fa-eye-slash');
            });
            </script>
            
            <input type="submit" name="login" value="Login">
            <a href="forgot.php" id="forgot">Forgot Your Password?</a>
            <h3>Don't hava an account? <a href="registration.php">Sign Up</a></h3>

           </div>
        </form> 
   </div>    
</body>
</html>