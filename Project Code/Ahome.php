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

            <script src="js/particles.min.js"></script>
  <script>
    particlesJS.load('particles-js', 'js/particles.json', function() {
      console.log('particles.json loaded..');
    });
  </script>

     </body>

</html>