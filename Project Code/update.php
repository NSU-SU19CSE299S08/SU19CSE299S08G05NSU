<?php
session_start();

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
                  <a class="navbar-brand active" href="#">Home</a>
                  <ul class="navbar-nav">
        
                      <li class="nav-item"><a class="nav-link" href="#">View User</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Delete user</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Add user</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                  </ul>
              </div>
            </nav>

    <div class="main">
      <div class="loginForm">
        <h1 class="text-center text-dark">Update</h1>
        <form action="admin/update.inc.php" method=" POST" onsubmit="return regValidation();">
    </div>
    <script src="js/form-validation.js"></script>

    <?php
         include 'includes/dbh.inc.php';
         $sql="SELECT * FROM users ";
		 $result=mysqli_query($conn,$sql);

    ?>

    <table>
         	<tr>
                 <th>User_name</th>
                 <th>v_uid</th>
         		<th>v_email</th>
         		<th>v_phone</th>
             </tr>
    </table>
  </body>
</html>