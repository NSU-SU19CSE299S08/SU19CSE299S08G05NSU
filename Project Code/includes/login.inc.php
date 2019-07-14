<?php

session_start();

if(isset($_POST['submit'])){
    // after click the login button page will connect to tha database

    include 'dbh,inc.php';

    // fetch data from client

    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $uid = mysqli_real_escape_string($conn,$_POST['pass']);

    if(empty($uid)|| empty($pass)){
        header("Location:../login.php?login=error");
        exit();
    }else{

        $sql="SELECT * FROM user WHERE user_uid='$uid'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);

        if($resultCheck <1){
            header("Location:../login.php?login=error");
			exit();
        }else{

            if($row=mysqli_fetch_assoc($result)){

                if($pass != $row['user_pass']){
                    header("Location:../login.php?login=wrong_password");
					exit();
                }
            }
        }
    }
}
else{
    header("Location:../login.php?login=error");
exit();
}

