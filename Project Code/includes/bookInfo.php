<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';


    $bookName = mysqli_real_escape_string($conn, $_POST['bookName']);
    $authorName = mysqli_real_escape_string($conn, $_POST['authorName']);
    $publisherName = mysqli_real_escape_string($conn, $_POST['publisherName']);
    $isbnNumber = mysqli_real_escape_string($conn, $_POST['isbnNumber']);
    $bookPrice = mysqli_real_escape_string($conn, $_POST['bookPrice']);
    $bookLanguage = mysqli_real_escape_string($conn, $_POST['bookLanguage']);



    $fileName = addslashes($_FILES['fileUpload']['name']);
    $fileType = addslashes($_FILES['fileUpload']['type']);
    $tmpName = addslashes(file_get_contents($_FILES['fileUpload']['tmp_name']));
    $typeArray = array('jpg', 'jpeg', 'png');
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);



    if (!empty($fileName)) {
        if (in_array($fileExt, $typeArray)) {
            $sql = "INSERT INTO bookinfo (BookName,AuthorName,PublisherName,ISBN,BookPrice,BookLanguage,BookImage) VALUES ('$bookName','$authorName','$publisherName','$isbnNumber','$bookPrice','$bookLanguage','$tmpName')";
            mysqli_query($conn, $sql);
        }
    } else {
        echo 'not uploaded';
    }
} else {
    echo 'not submitted';
}
