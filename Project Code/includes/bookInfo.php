<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';


    $bookName = mysqli_real_escape_string($conn, $_POST['bookName']);
    $authorName = mysqli_real_escape_string($conn, $_POST['authorName']);
    $publisherName = mysqli_real_escape_string($conn, $_POST['publisherName']);
    $isbnNumber = mysqli_real_escape_string($conn, $_POST['isbnNumber']);
    $bookPrice = mysqli_real_escape_string($conn, $_POST['bookPrice']);
    $bookLanguage = mysqli_real_escape_string($conn, $_POST['bookLanguage']);


    $bookImage = $_FILES['image']['name'];
    $bookImageTmpName =$_FILES['image']['tmp_name'];
    $folder = '../uploads/'.$bookImage;
    move_uploaded_file($bookImageTmpName,$folder);


    
        
            $sql = "INSERT INTO bookinfo (BookName,AuthorName,PublisherName,ISBN,BookPrice,BookLanguage,BookImage) VALUES ('$bookName','$authorName','$publisherName','$isbnNumber','$bookPrice','$bookLanguage','$folder')";
            
            $data = mysqli_query($conn, $sql);
        if($data){
            echo 'submitted';
        }
        else{
            echo 'not submitted';
        }
    
} else {
    echo 'not submitted';
}
