<?php
include_once 'includes/dbh.inc.php';
session_start();
if (isset($_SESSION['user_id']) == true) {
  $userID = $_SESSION['user_id'];

  $query = "SELECT * from users WHERE user_id ='$userID'; ";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $id = $row['user_id'];


  if (isset($_POST['submit'])) {




    $bookName = mysqli_real_escape_string($conn, $_POST['bookName']);
    $authorName = mysqli_real_escape_string($conn, $_POST['authorName']);
    $publisherName = mysqli_real_escape_string($conn, $_POST['publisherName']);
    $isbnNumber = mysqli_real_escape_string($conn, $_POST['isbnNumber']);
    $bookPrice = mysqli_real_escape_string($conn, $_POST['bookPrice']);
    $bookLanguage = mysqli_real_escape_string($conn, $_POST['bookLanguage']);


    $bookImage = $_FILES['image']['name'];
    $bookImageTmpName = $_FILES['image']['tmp_name'];
    $folder = "uploads/" . $bookImage;
    move_uploaded_file($bookImageTmpName, $folder);




    $sql = "INSERT INTO bookinfo (BookName,AuthorName,PublisherName,ISBN,BookPrice,BookLanguage,BookImage,userID) VALUES ('$bookName','$authorName','$publisherName','$isbnNumber','$bookPrice','$bookLanguage','$folder','$id');";

    $data = mysqli_query($conn, $sql);

    if ($data) {
      header("Location: BookForm.php?BookInfo=inserted");
      exit();
    } else {
      header("Location: BookForm.php?BookInfo=Notinserted");
      exit();
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Book Info | Enter Your Book Information</title>

  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/BookForm.css" />
</head>

<body>


  <div class="formArea">
    <form action="" method="POST" class="formSection" onsubmit="return bookEntryForm();" enctype="multipart/form-data">
      <h1 class="text-center mb-4">Book Information</h1>
      <div class="row">
        <div class="form__right col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" id="bookName" name="bookName" placeholder="Book Name" />
            <label id="bookNameLabel"></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="authorName" name="authorName" placeholder="Author's Name" />
            <label id="authorNameLabel"></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="publisherName" name="publisherName" placeholder="Publisher's Name" />
            <label id="publisherNameLabel"></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="isbnNumber" name="isbnNumber" placeholder="ISBN Number" />
            <label for="" id="isbnLabel"></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="bookPrice" name="bookPrice" placeholder="Book's Price" />
            <label id="bookPriceLabel"></label>
          </div>
        </div>
        <div class="form__left col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" id="bookLanguage" name="bookLanguage" placeholder="Book's Language" />
            <label id="bookLanguageLabel"></label>
          </div>
          <!-- <div class="form-group">
            <input type="text" class="form-control-file" id="shopAddress" name="shopAddress" placeholder="Shop's Address" />
          </div> -->
          <div class="form-group">
            <input type="file" class="form-control-file" id="fileUpload" name="image" onchange="readURL(this);" />
          </div>

          <div class="imagePreview">
            <img src="" alt="" id="img" />
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/form-validation.js"></script>
  <script src="js/imagePreview.js"></script>
</body>

</html>