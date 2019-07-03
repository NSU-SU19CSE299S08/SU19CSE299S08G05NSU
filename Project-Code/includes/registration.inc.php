<?php

if(isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn,$_POST['full_name']);
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);

    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck>0){
        echo "UserNmae already exist";
    }
    else{
        if(empty($name) || empty($uid) || empty($email) ||empty($pass)|| empty($phone)) {

            header("Location: ../registration.php?signup=empty");
            exit();
        }else{
            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                header("Location: ../registration.php?signup=invalid_Name");
                exit();
            }else{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: ../registration.php?signup=invalid_email");
                    exit();
                }
                else{
                    
                }

            }

        }

    }

} else{
    header("Location: ../registration.php");
	exit(); 
}