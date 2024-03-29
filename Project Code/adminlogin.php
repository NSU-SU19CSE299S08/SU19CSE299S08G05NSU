
<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title> Admin Login</title>

  <!-- css files -->
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/login.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />

  <!-- js files- -->

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
</head>

<body>
  <div class="main">
    <div class="loginForm">
      <h1 class="text-center text-dark">Admin Login</h1>
      <form action="includes/adminLogin.inc.php" method="POST" onsubmit="return regValidation();">
        <div class="form-input">


          <input type="text" id="uemail" placeholder="Enter Your Username" name="a_id" />
          <label for="" id="email__label1"></label>
        </div>
        <div class="form-input">

          <input type="password" name="a_pass" placeholder="Enter Your Password" />
          <label id="pass__label1"></label>
        </div>

        <input class="btn btn-outline-danger" type="submit" name="submit" value="Login">

        <div class="form-footer">
          <a href="registration.php">Create An Account.</a>
        </div>

    </div>

    <script src="js/form-validation.js"></script>
</body>

</html>