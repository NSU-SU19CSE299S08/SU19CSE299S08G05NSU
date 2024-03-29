<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration</title>

  <!-- -----------css files--------------- -->
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/registration.css" />
</head>

<body>

  <div class="main">
    <div class="loginForm">
      <h1 class="text-center text-dark">Register</h1>
      <form action="includes/registration.inc.php" method="POST" submit="return regValidation();">
        <div class="form-input1">
          <input type="text" id="fullName" name="full_name" placeholder="Enter Your Full Name" />
          <label id="fullName__label1"></label>
        </div>
        <div class="form-input2">
          <input type="text" id="uname" name='uid' placeholder="Enter Your Username" />
          <label id="userName__label1"></label>
        </div>
        <div class="form-input3">
          <input type="text" id="uemail" name="email" placeholder="Enter Your Email" />
          <label id="email__label1"></label>
        </div>
        <div class="form-input3">
          <input type="text" id="uemail" name="publisher" placeholder="Enter Publisher's Name" required />
          <label id=""></label>

        </div>

        <div class="form-input4">
          <input type="password" id="upass" name="pass" placeholder="Enter your Password" />
          <label id="upass__label1"></label>
        </div>
        <div class="form-input5">
          <input type="text" id="uphone" name="phone" placeholder="Enter your Phone Number" />
          <label id="uphone__label1"></label>
        </div>

        <div class="form-input6">
          <input type="text" id="uAddress" name="address" placeholder="Enter your Address" />
          <label id="uaddress__label1"></label>
        </div>

        <input class="btn btn-outline-dark " type="submit" name="submit" value="Register" />
      </form>
    </div>
    <div class="form-footer">
      <a href="login.php">Login With An Existing Account.</a>
    </div>
  </div>
  <!-- --------------js files---------------- -->

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/form-validation.js"></script>
</body>

</html>