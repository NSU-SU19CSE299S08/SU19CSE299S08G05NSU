<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Nayeem, Nasib, Iffat, Ilias" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration</title>

    <!-- -----------css files--------------- -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/registration.css" />

    <!-- --------------js files---------------- -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    
  </head>
  <body>
    <div class="main">
      <div class="loginForm">
        <h1 class="text-center text-dark">Register</h1>
        <form action="includes/registration.inc.php" method="POST">
          <div class="form-input">
            <input type="text" name="full_name" placeholder="Enter Your Full Name" />
          </div>
          <div class="form-input">
          <input type="text" name="uid" placeholder="Enter Your Username" />
          </div>
            <div class="form-input">
            <input type="email" name="email" placeholder="Enter Your Email" />
            </div>

            <input type="password" name="pass" placeholder="Enter your Password" />
            <input type="text" name="phone" placeholder="Enter your Phone Number" />

          <input class="btn btn-outline-dark " type="submit" name="submit" value="Register" />
        </form>
      </div>
      <div class="form-footer">
        <a href="login.html">Login With An Existing Account.</a>
      </div>
    </div>
  </body>
</html>
