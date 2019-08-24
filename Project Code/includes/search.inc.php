<?php
if (isset($_POST['submit'])) {
    // after click the login button page will connect to tha database

    include_once 'dbh.inc.php';

    // fetch data from client

    $search= mysqli_real_escape_string($conn, $_POST['search']);
    $sql= "SELECT * FROM bookinfo WHERE BookName='$search' OR AuthorName='$search' OR PublisherName='$search' ";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
}else{
    
}
?>