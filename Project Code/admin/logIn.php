<?php

session_start();

if(isset($_POST['submit'])){
    // after click the login button page will connect to tha database

    include 'dbh.inc.php';

    // fetch data from client

    $aid = mysqli_real_escape_string($conn,$_POST['aid']);
    $pass = mysqli_real_escape_string($conn,$_POST['apass']);

    // check tht aid and password is empty or not.
    if(empty($aid) || empty($pass)){
        header("Location:../login.php?login=error");
        exit();
    }else{

        // sql query for fetch data from database.
        $sql="SELECT * FROM admins WHERE admin_aid='$aid'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);

        //check if user not exist 
        if($resultCheck <1){
            header("Location:../login.php?login=error");
			exit();
        }else{
            if($row=mysqli_fetch_assoc($result)){

                // check whether pass is wrong or not.
                if($pass != $row['admin_pass']){
                    header("Location:../login.php?login=wrong_password");
					exit();
                }else{
                    $_SESSION['a_id']=$row['admin_id'];
                    $_SESSION['name']=$row['full_name'];
                    $_SESSION['a_uid']=$row['admin_uid'];
                    $_SESSION['a_email']=$row['admin_email'];
                    $_SESSION['a_phone']=$row['admin_phone'];

                    //need to add the page path which will apear after successful login.
                    header("Location:../#.php?login=success") 
                }
            }
        }

    }
}else{
     // go back to the login page.
     header("Location:../login.php?login=error");
     exit();
}