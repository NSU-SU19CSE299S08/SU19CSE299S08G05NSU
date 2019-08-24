<?php
session_start();
include_once 'includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Nayeem, Nasib" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Welcome to BoiMela Online Service</title>
  <!-- -css files- -->
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/index1.css" />

  <!-- js files -->

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script src="js/custom.js"></script>
  <script src="js/index1.js"></script>
</head>

<body>

<nav class="navbar navbar-dark bg-dark  navbar-expand-md">

                <div class="container">
                  <a class="navbar-brand active" href="index.php">Home</a>
                  <ul class="navbar-nav">
        
                      <li class="nav-item"><a class="nav-link" href="#">View User</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Delete user</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Add user</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                  </ul>
              </div>
            </nav>

            <div class="logo"><a href="index1.html">BookFinder</a></div>
      <div class="signin text-right">
        <?php
        if (isset($_SESSION['adminUserName'])) {
          $user = $_SESSION['adminUserName'];
          $query = "SELECT * FROM admins Where adminUserName= '$user';";

          $result = mysqli_query($conn, $query);
          $row = mysqli_fetch_array($result);
          $userName = $row['adminUserName'];
          echo $userName;

          echo '<a href="#" class="btn btn-outline-danger">username</a>
        <a href="includes/logout.inc.php" class="btn btn-outline-dark">Logout</a>';
        } else {
          echo ' <a href="login.php" class="btn btn-outline-dark "> Login</a>;
        }


        ?>

      </div>
    </div>

     </body>

</html>