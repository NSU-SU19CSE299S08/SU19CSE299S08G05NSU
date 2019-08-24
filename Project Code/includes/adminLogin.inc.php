<?php

session_start();

if(isset($_POST['submit'])){
    // after click the login button page will connect to tha database

    include 'dbh.inc.php';

    // fetch data from client

    $aid = mysqli_real_escape_string($conn,$_POST['a_id']);
    $pass = mysqli_real_escape_string($conn,$_POST['a_pass']);

    // check tht aid and password is empty or not.
    if(empty($aid) || empty($pass)){
        header("Location:../adminlogin.php?login=empty");
        exit();
    }else{

        // sql query for fetch data from database.
        $sql="SELECT * FROM admins WHERE adminUserName='$aid'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);

        //check if user not exist 
        if($resultCheck <1){
            header("Location:../adminlogin.php?login=notFound");
			exit();
        }else{
            if($row=mysqli_fetch_assoc($result)){

                // check whether pass is wrong or not.
                if($a_pass != $row['adminPass']){
                    header("Location:../adminlogin.php?login=wrong_password");
					exit();
                }else{
                    $_SESSION['a_id']=$row['a_id'];
                    $_SESSION['name']=$row['adminName'];
                    $_SESSION['a_uid']=$row['adminUserName'];
                    $_SESSION['a_email']=$row['adminEmail'];
                    $_SESSION['a_phone']=$row['adminPhone'];

                    //need to add the page path which will apear after successful login.
                    header("Location:../adminlogin.php?login=success") ;
                }
            }
        }

    }
}else{
     // go back to the login page.
     header("Location:../adminlogin.php?login=error2");
     exit();
}