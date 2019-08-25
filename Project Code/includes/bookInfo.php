<?php
session_start();

if (isset($_SESSION['user_id']) == true){
    $userID = $_SESSION['username'];
    
    $query = "SELECT * from users WHERE username ='$userID'; ";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $id = $row['userID'];

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';


    $bookName = mysqli_real_escape_string($conn, $_POST['bookName']);
    $authorName = mysqli_real_escape_string($conn, $_POST['authorName']);
    $publisherName = mysqli_real_escape_string($conn, $_POST['publisherName']);
    $isbnNumber = mysqli_real_escape_string($conn, $_POST['isbnNumber']);
    $bookPrice = mysqli_real_escape_string($conn, $_POST['bookPrice']);
    $bookLanguage = mysqli_real_escape_string($conn, $_POST['bookLanguage']);










    $sql = "INSERT INTO bookinfo (BookName,AuthorName,PublisherName,ISBN,BookPrice,BookLanguage,BookImage,userID) VALUES ('$bookName','$authorName','$publisherName','$isbnNumber','$bookPrice','$bookLanguage','$id')";
    mysqli_query($conn, $sql);
} else {
    echo 'not submitted';
}
