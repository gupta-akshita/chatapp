<?php
    include("include/connection.php");

    if(isset($_POST['sign_up'])){
        $name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
        $country = htmlentities(mysqli_real_escape_string($con, $_POST['user_country']));
        $gender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
        $rand = rand(1, 2);
        
        if($name == ''){
            echo"<script>alert('We can not verify your name')</script>";
        }
        if(strlen($pass) < 8){
            echo"<script>alert('Password should be minimum of 8 character')</script>";
            exit();
        }
        $check_email = "select * from users where user_email='$email'";
        $run_email = mysqli_query($con, $check_email);
        $check = mysqli_num_rows($run_email);

        if ($check==1){
            echo"<script>alert('Email Already exist, please try again')</script>";
            echo"<script>window.open('signup.php', '_self')</script>";
            exit();
        }
        if($rand == 1)
            $profile_pic = "image/image.png";
        else if($rand == 2)
            $profile_pic = "image/image2.jpg";

        $insert = "INSERT INTO users ('user_id','user_pass', user_email, user_profile, user_gender,
         user_country) VALUES(1,$pass, $email, $profile_pic, $gender, $country);";
        
        $query = mysqli_query($con, $insert);
        
        if(mysqli_query($con, $insert)){
            echo"<script>alert('Congratulations!! $name, your account has been successfully registered')</script>";

            echo"<script>window.open('signin.php', '_self')</script>";
        }
        else{
            echo"<script>alert('Kindly try again')</script>";
            echo"<script>window.open('signup.php', '_self')</script>";
        }   
    }
?>