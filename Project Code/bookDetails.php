
<?php include_once 'includes/dbh.inc.php'; ?>


<?php 
  // if(!isset($_GET['ID'])){
  //   header('Location:index1.php');
  // }
    
  $sql = "SELECT * from bookinfo where ID =".$_GET['ID'];
  

  if($result = mysqli_query($conn,$sql)){
    $row = mysqli_fetch_assoc($result);
  


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $row['BookName'] ?> | Book Finder</title>

  <!-- -css files- -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bookDetails.css">

    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/deyal.js"></script>
</head>
<body>
   <!-- <div class="container"> -->
   <header class="header-area">
    <!---header area starts----->
    <div class="logo-bar">
      <!---logo area starts----->


      <div class="logo"><a href="index1.html">BookFinder</a></div>
      <div class="signin text-right">


        <?php
        if (isset($_SESSION['user_uid'])) {

          $user = $_SESSION['user_uid'];
          $query = "SELECT * FROM users Where user_uid = '$user';";


          $result = mysqli_query($conn, $query);
          $row = mysqli_fetch_array($result);
          $userName = $row['user_uid'];



          echo '<a href="ShopProfile.php" class="btn btn-outline-danger">' . $userName . '</a>
        <a href="includes/logout.inc.php" class="btn btn-outline-dark">Logout</a>';
        } else {
          echo ' <a href="login.php" class="btn btn-outline-dark "> Login</a>
        <a href="registration.php" class="btn btn-outline-dark"> Register</a>';
        }


        ?>

      </div>
    </div>
    <!-------logo area ends----->
    <?php
    include('includes/header.inc.php');
    ?>

  </header>
  <!---header area ends----->


 
  <div class="container1">
    <div class="bookDetail">
      <div class="bookImg">
        <img src="<?php echo $row['BookImage']; ?>" alt="<?php echo $row['BookName'];?>">
      </div>
      <div class="bookInfo">
        <h1><?php echo $row['BookName'];?></h1>
        <a href="#"><?php echo $row['AuthorName'];?></a>
        
        <p>TK. <?php echo $row['BookPrice'];?></p>
        
      </div>
    </div>

      <div class="bookSpecification">
        <h3 class="display-4">Specification of the Book:</h3>
        <table class="table table-bordered mb-3">
          <tr>
            <td>Title</td>
            <td><?php echo $row['BookName'];?></td>
          </tr>
          <tr>
            <td>Author</td>
            <td><?php echo $row['AuthorName'];?></td>
          </tr>
          <tr>
            <td>Publisher</td>
            <td><?php echo $row['PublisherName'];?></td>
          </tr>
          <tr>
            <td>ISBN</td>
            <td><?php echo $row['ISBN'];?></td>
          </tr>
          <tr>
            <td>Language</td>
            <td><?php echo $row['BookLanguage'];?></td>
          </tr>
        </table>
      </div>
<?php } ?>











  </div>


</body>
</html>
