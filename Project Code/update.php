<?php
session_start();

?>

?>

<?php
session_start();

if(!isset($_SESSION['a_id']))
{
	header("Location:login.php");
    exit;
}
include_once "dbh.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>

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
    <div class="main">
      <div class="loginForm">
        <h1 class="text-center text-dark">Update</h1>
        <form action="admin/update.inc.php" method=" POST" onsubmit="return regValidation();">
    </div>

    <script src="js/form-validation.js"></script>
  </body>
</html>