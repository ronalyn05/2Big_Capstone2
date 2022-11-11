<?php
    include_once("connection.php");
    // Connection Created Successfully

    session_start();

    // Store All Errors
    $errors = [];

    // When Sign Up Button Clicked
    // check if the form has been submitted. If it has, start to process the form and save it to the database
    if (isset($_POST['signup'])) 
    {
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $mid_name = mysqli_real_escape_string($conn, $_POST['mid_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $contact_num = mysqli_real_escape_string($conn, $_POST['contact_num']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $con_pass = mysqli_real_escape_string($conn, $_POST['con_pass']);
        $proof = mysqli_real_escape_string($conn, $_POST['proof']);



        // check password length if password is less then 8 character so
        if (strlen(trim($_POST['password'])) < 8) {
            $errors['password'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
        } else {
            // if password not matched so
            if ($_POST['password'] != $_POST['con_pass']) {
                $errors['password'] = 'Password not matched';
            } else {
                $password = md5($_POST['password']);
            }
        }
        // generate a random num for contact
        $contact_num = rand(99999999999, 11111111111);
        // generate a random Code
        $code = rand(999999, 111111);
        // set Status
        $status = "Not Verified";
        // generate a random num for user 
       // $user_id = rand(000000, 999999);


        // check email validation and save information
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $res = mysqli_query($conn, $sql) or die('query failed');
        if (mysqli_num_rows($res) > 0) {
            $errors['email'] = 'Email is Already Taken';
        }

        // count errors
        if (count($errors) === 0) {
            $insertQuery = "INSERT INTO user (first_name, mid_name, last_name, user_name, address, contact_num, email, password, con_pass, proof, code, status)
            VALUES ('$first_name','$mid_name','$last_name','$user_name','$address','$contact_num','$email','$password', '$con_pass', '$proof', '$code','$status')";
            $insertInfo = mysqli_query($conn, $insertQuery);

            // Send Verification Code In Gmail
            if ($insertInfo) {
                // Configure Your Server To Send Mail From Local Host 
                $subject = 'Email Verification Code';
                $message = "Your verification code is $code. For your protection, do not share this code from anyone.";
                $sender = 'From: technique.services2022@gmail.com
';

                if (mail($email, $subject, $message, $sender)) {
                    $message = "We've sent a verification code to your Email <br> $email";

                    $_SESSION['message'] = $message;
                    header('location: otp.php');
                } else {
                    $errors['otp_errors'] = 'Sorry, Failed while sending code!';
                }
            } else {
                $errors['db_errors'] = "Failed while inserting data into database!";
            }
        }
        
        // If file upload form is submitted 
        $status = $statusMsg = ''; 
        $status = 'error'; 
        if(!empty($_FILES["image"]["name"])) { 
            // Get file info 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif'); 
            if(in_array($fileType, $allowTypes)){ 
                $image = $_FILES['image']['tmp_name']; 
                $proof = addslashes(file_get_contents($image)); 
             
                // Insert image content into database 
                $insert = $conn->query("INSERT into user (proof) VALUES ('$proof')");
                 
                if($insert){ 
                    $status = 'success'; 
                    $statusMsg = "File uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.'; 
        } 
        // Display status message 
        echo $statusMsg;        
    }
        

    // if Verify Button Clicked
    if (isset($_POST['verify'])) {
        $_SESSION['message'] = "";
        $otp = mysqli_real_escape_string($conn, $_POST['otp']);
        $otp_query = "SELECT * FROM user WHERE code = $otp";
        $otp_result = mysqli_query($conn, $otp_query);

        if (mysqli_num_rows($otp_result) > 0) {
            $fetch_data = mysqli_fetch_assoc($otp_result);
            $fetch_code = $fetch_data['code'];

            $update_status = "Verified";
            $update_code = 0;

            $update_query = "update user SET status = '$update_status' , code = $update_code WHERE code = $fetch_code";
            $update_result = mysqli_query($conn, $update_query);

            if ($update_result) {
                header('location: login.php');
            } else {
                $errors['db_error'] = "Failed To Inserting Data In Database!";
            }
        } else {
            $errors['otp_error'] = "You enter invalid verification code!";
        }
    }

    // if login Button clicked so
    if (isset($_POST['login'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);

        $emailQuery = "SELECT * FROM user WHERE email = '$email'";
        $email_check = mysqli_query($conn, $emailQuery);

        if (mysqli_num_rows($email_check) > 0) {
            $passwordQuery = "select * FROM user WHERE email = '$email' AND password = '$password'";
            $password_check = mysqli_query($conn, $passwordQuery);
            if (mysqli_num_rows($password_check) > 0) {
                $fetchInfo = mysqli_fetch_assoc($password_check);
                $status = $fetchInfo['status'];
                $name = $fetchInfo['firstName'] . " " . $fetchInfo['lastName'];
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $fetchInfo['email'];
                $_SESSION['password'] = $fetchInfo['password'];
                if ($status === 'Verified') {
                    header('location: main.php');
                } else {
                    $info = "It's look like you haven't still verify your email $email";
                    $_SESSION['message'] = $info;
                    header('location: otp.php');
                }
            } else {
                $errors['email'] = 'Password did not matched';
            }
        } else {
            $errors['email'] = 'Invalid Email Address';
        }
    }

    // if forgot button will clicked
    if (isset($_POST['forgot_password'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;

        $emailCheckQuery = "SELECT * FROM user WHERE email = '$email'";
        $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

        // if query run
        if ($emailCheckResult) {
            // if email matched
            if (mysqli_num_rows($emailCheckResult) > 0) {
                $code = rand(999999, 111111);
                $updateQuery = "UPDATE user SET code = $code WHERE email = '$email'";
                $updateResult = mysqli_query($conn, $updateQuery);
                if ($updateResult) {
                    $subject = 'Email Verification Code';
                     $message = "Your verification code is $code. For your protecton, do not share this code from anyone.";
                $sender = 'From: rona.giducos28@gmail.com';


                    if (mail($email, $subject, $message, $sender)) {
                        $message = "We've sent a verification code to your Email <br> $email";

                        $_SESSION['message'] = $message;
                        header('location: verifyEmail.php');
                    } else {
                        $errors['otp_errors'] = 'Sorry, Failed while sending code!';
                    }
                } else {
                    $errors['db_errors'] = "Failed while inserting data into database!";
                }
            }else{
                $errors['invalidEmail'] = "Invalid Email Address";
            }
        }else {
            $errors['db_error'] = "Failed while checking email from database!";
        }
    }

    if(isset($_POST['verifyEmail'])){
        $_SESSION['message'] = "";
        $OTPverify = mysqli_real_escape_string($conn, $_POST['OTPverify']);
        $verifyQuery = "SELECT * FROM user WHERE code = $OTPverify";
        $runVerifyQuery = mysqli_query($conn, $verifyQuery);
        if($runVerifyQuery){
            if(mysqli_num_rows($runVerifyQuery) > 0){
                $newQuery = "update user SET code = 0";
                $run = mysqli_query($conn,$newQuery);
                header("location: newPassword.php");
            }else{
                $errors['verification_error'] = "Invalid Verification Code";
            }
        }else{
            $errors['db_error'] = "Failed while checking Verification Code from database!";
        }
}

    // change Password
    if(isset($_POST['changePassword'])){
        $password = md5($_POST['password']);
        $confirmPassword = md5($_POST['confirmPassword']);
        
        if (strlen($_POST['password']) < 8) {
            $errors['password_error'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
        } else {
            // if password not matched so
            if ($_POST['password'] != $_POST['confirmPassword']) {
                $errors['password_error'] = 'Password not matched';
            } else {
                $email = $_SESSION['email'];
                $updatePassword = "UPDATE user SET password = '$password' WHERE email = '$email'";
                $updatePass = mysqli_query($conn, $updatePassword) or die("Query Failed");
                session_unset($email);
                session_destroy();
                header('location: login.php');
            }
        }
    }
?>
