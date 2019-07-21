<?php
if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $search = mysqli_real_escape_string($conn,$_POST['search']);

    if(empty($search)){
        header("Location:../index1.php?login=error");
        exit();
    }else{
        

    }

    
} else {
    echo 'not submitted';
}


?>