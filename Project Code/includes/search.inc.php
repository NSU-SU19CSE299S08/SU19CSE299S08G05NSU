<?php
if (isset($_POST['submit'])) {
    // after click the login button page will connect to tha database

    include_once 'dbh.inc.php';

    // fetch data from client

    $search= mysqli_real_escape_string($conn, $_POST['search']);
    $sql= "SELECT * FROM bookinfo WHERE BookName LIKE '%$search%' OR AuthorName LIKE '%$search%' OR PublisherName LIKE '%$search%' ";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo  $row['BookName'];
            echo  $row['AuthorName'];
            echo  $row['BookPrice'];
            
        }

    }else{
        header("Location:../index1.php?search=NoFound");

    }
}else{
    header("Location:../index1.php?search=error");
    exit();
}
?>