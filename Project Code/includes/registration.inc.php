<?php

if (isset($_POST['submit'])) {

    // connection between client and server
    include_once 'dbh.inc.php';

    // data fetch from from client 

    $name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Check user already exist or not.

    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        header("Location: ../registration.php?error=usernameexist");
        exit();
    } else {
        //check for empty fields

        if (empty($name) || empty($uid) || empty($email) || empty($publisher) || empty($pass) || empty($phone) || empty($address)) {

            header("Location: ../registration.php?signup=empty");
            exit();
        } else {
            // check the valid name

            if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
                header("Location: ../registration.php?signup=invalid_Name");
                exit();
            } else {
                // email validation

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../registration.php?signup=invalid_email");
                    exit();
                } else {
                    // phone number validation 

                    if (!is_numeric($phone)) {
                        header("Location: ../registration.php?signup=invalid_phoneNo");
                        exit();
                    } else {
                        // send data into the server

                        $sql = "INSERT INTO users(full_name,user_uid,user_email,publisher_name,user_pass,user_phone,shop_address)
                        VALUES('$name','$uid','$email','$publisher','$pass','$phone','$address');";
                        mysqli_query($conn, $sql);
                        header("Location: ../registration.php?signup=success");
                        exit();
                    }
                }
            }
        }
    }
} else {
    header("Location: ../registration.php");
    exit();
}
