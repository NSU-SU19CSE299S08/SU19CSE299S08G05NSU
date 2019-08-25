<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
include_once 'includes/dbh.inc.php';



if (isset($_SESSION['user_id']) == true) {
  $userID = $_SESSION['user_id'];
  $query1 = "SELECT * from users WHERE user_id ='$userID';";
  $result1 = mysqli_query($conn, $query1);
  $row1 = mysqli_fetch_assoc($result1);
  $id = $row1['user_id'];




  $query2 = "SELECT * FROM bookinfo WHERE userID = '$id'";
  $result2 = mysqli_query($conn, $query2);


  $userQuery = "SELECT * FROM users WHERE user_id = '$id'";
  if ($userResult = mysqli_query($conn, $userQuery)) {
    $userRow = mysqli_fetch_assoc($userResult);

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Profile || Shop</title>

  <!-- -css files- -->
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/ShopProfile.css" />
  <link rel="stylesheet" href="css/index1.css" />

  <!-- js files -->

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
</head>

<body>

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
                  <a href="BookForm.php" class="btn btn-outline-dark">Add Book</a>
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

  <div class="shopInfo">
    <div class="shopProfile">
      <div class="container">
        <div class="row my-4 shopHeader">
          <div class="col-md-6 shopProfile-1 text-center">
            <div class="profileInfo">

              <img class="my-5" src="img/book6.jpg" alt="" />
              <h2 class="text-light mb-5">Sheba Publisher</h2>
            </div>

          </div>

          <div class="col-md-6 shopProfile-2  text-light">
            <h4 class=" mt-5 mb-4 text-center">Owner: <?php echo $userRow['full_name'] ?></h4>
            <div class="profileInfo-2 text-center">
              <p class="lead">Email: <?php echo $userRow['user_email'] ?></p>
              <p class="lead">Phone Number: <?php echo $userRow['user_phone'] ?></p>
              <p class="lead">Shop Address: <?php echo $userRow['shop_address'] ?></p>

              <a href="editUser.php" class="btn btn-danger">Edit</a>


            </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="shopBooks">
    <div class="container">
      <div class="row text-center">
        <?php
          while ($row2 = mysqli_fetch_array($result2)) {
            ?>
        <div class="col-md-3">
          <div class="bf19book1">
            <div class="bf19-content">
              <a href="bookDetails.php?page=bookDetails&ID=<?php echo $row2['id'] ?>" title="<?php echo $row2['BookName'];  ?>">
                <img src="<?php echo $row2['BookImage'] ?>" alt="<?php echo $row2['BookName'];  ?>" /></a>
              <a href="bookDetails.php?page=bookDetails&ID=<?php echo $row2['id'] ?>" title="<?php echo $row['BookName'];  ?>">
                <h5><?php echo $row2['BookName']; ?></h5>
              </a>
              <a href="">
                <p class="lead"><?php echo $row2['AuthorName'];  ?></p>
              </a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>
</body>


</html>