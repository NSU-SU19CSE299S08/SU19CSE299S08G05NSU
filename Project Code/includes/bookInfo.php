<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';
    // mysql_query("SET CHARACTER SET utf8");
    // mysql_query("SET SESSION collation_connection ='utf8_general_ci'");

    $bookName = mysqli_real_escape_string($conn, $_POST['bookName']);
    $authorName = mysqli_real_escape_string($conn, $_POST['authorName']);
    $publisherName = mysqli_real_escape_string($conn, $_POST['publisherName']);
    $isbnNumber = mysqli_real_escape_string($conn, $_POST['isbnNumber']);
    $bookPrice = mysqli_real_escape_string($conn, $_POST['bookPrice']);
    $bookLanguage = mysqli_real_escape_string($conn, $_POST['bookLanguage']);
    $bookImage = mysqli_real_escape_string($conn, $_FILES['fileUpload']['name']);

    // $filename = addslashes($_FILES['fileUpload']['name']);
    // $tmpName = addcslashes(file_get_contents($_FILES['fileUpload']['tmp_name']));

    $sql = "INSERT INTO bookinfo (BookName,AuthorName,PublisherName,ISBN,BookPrice,BookLanguage,BookImage) VALUES ('$bookName','$authorName','$publisherName','$isbnNumber','$bookPrice','$bookLanguage','$bookImage')";
    mysqli_query($conn, $sql);
} else {
    echo 'not submitted';
}
