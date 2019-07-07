
<?php

session_start();

if(isset($_POST['submit'])){
    // after click the login button page will connect to tha database

    include 'dbh,inc.php';

    // fetch data from client

    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $uid = mysqli_real_escape_string($conn,$_POST['pass']);
}
else{
    header("Location:../login.php?login=error");
exit();
}