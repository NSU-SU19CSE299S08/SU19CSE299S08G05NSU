
<<<<<<< HEAD

=======
>>>>>>> back-end-master
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

    }



} else{
<<<<<<< HEAD
    //header("Location: ../registration.php");
    echo "failed";
=======
    header("Location: ../registration.php");
>>>>>>> back-end-master
    exit();
}