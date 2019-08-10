<?php
include_once 'includes/dbh.inc.php'
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

  <div class="shopInfo">
    <div class="shopProfile">
      <div class="container">
        <div class="row my-4 shopHeader">
          <div class="col-md-6 shopProfile-1 text-center">
            <div class="profileInfo">
              <img class="my-5" src="img/book6.jpg" alt="" />
              <h2 class="text-light mb-5">Sheba Publishers</h2>
            </div>
          </div>
          <div class="col-md-6 shopProfile-2  text-light">
            <h4 class=" mt-5 mb-4 text-center">Owner: Md. Abu Nasib</h4>
            <div class="profileInfo-2 text-center">
              <p class="lead">Email: something@example.com</p>
              <p class="lead">Phone Number: 0195555555</p>
              <p class="lead">Shop Address: Uttara Sector #13</p>
              <p class="lead">Employee: 10</p>
              <p class="lead">Number of Books: 300</p>
            </div>
            <button class="btn btn-danger text-right  mt-3 mb-4 ">
              Edit
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $sql = "SELECT * FROM bookinfo";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  ?>



  <div class="shopBooks">
    <div class="container">
      <div class="row text-center">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-md-3">
            <div class="bf19book1">
              <div class="bf19-content">
                <a href="index1.php?page=bookDetails&ID=<?php echo $row['ID']?>" title="<?php echo $row['BookName'];  ?>">
                  <img src="img/bookfair19/vaireapure.jpg" alt="<?php echo $row['BookName'];  ?>" /></a>
                <a href="" title="<?php echo $row['BookName'];  ?>">
                  <h5><?php echo $row['BookName']; ?></h5>
                </a>
                <a href="">
                  <p class="lead"><?php echo $row['AuthorName'];  ?></p>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</body>

</html>