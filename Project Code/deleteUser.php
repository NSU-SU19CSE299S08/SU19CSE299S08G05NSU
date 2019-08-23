
<?php
include_once "includes/dbh.inc.php";
$query = "SELECT * FROM users";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Update</title>

    <!-- css files -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />

    <!-- js files- -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
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
      

    <script src="../js/form-validation.js"></script>

  </body>
</html>