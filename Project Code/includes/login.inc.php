<?php

session_start();

if (isset($_POST['submit'])) {
    // after click the login button page will connect to tha database

    include_once 'dbh.inc.php';

    // fetch data from client

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    //check that uid and passord is empty or not .
    if (empty($uid) || empty($pass)) {
        header("Location:../login.php?login=error");
        exit();
    } else {

        // sql query for fetch data from database.
        $sql = "SELECT * FROM users WHERE user_uid='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        //check if user not exist 
        if ($resultCheck < 1) {
            header("Location:../login.php?error=UsernotExist");
            exit();
        } else {

            if ($row = mysqli_fetch_assoc($result)) {

                // check whether pass is wrong or not.
                if ($pass != $row['user_pass']) {
                    header("Location:../login.php?login=wrong_password");
                    exit();
                } else {
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['full_name'] = $row['full_name'];
                    $_SESSION['user_uid'] = $row['user_uid'];
                    $_SESSION['user_email'] = $row['user_email'];
                    $_SESSION['user_phone'] = $row['user_phone'];

                    //need to add the page path which will apear after successful login.
                    header("Location:../index1.php?login=success");
                }
            }
        }
    }
} else {
    // go back to the login page.
    header("Location:../login.php?login=error2");
    exit();
}
