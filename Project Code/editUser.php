

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
                  <a class="navbar-brand active" href="Ahome.php">Home</a>
                  <ul class="navbar-nav">
        
                      <li class="nav-item"><a class="nav-link" href="viewUser.php">View User</a></li>
                      <li class="nav-item"><a class="nav-link" href="update.php">Update user</a></li>
                      <li class="nav-item"><a class="nav-link" href="deleteUser.php">Delete user</a></li>
                      <li class="nav-item"><a class="nav-link" href="Includes/logout.inc.php">Logout</a></li>
                  </ul>
              </div>
            </nav>
            <h1 class="display-4">User List:</h1>

         <div class="table-info">
              <table class="table table-bordered table-hover">
                <thead class="table-light ">
                  <tr>
                    <th>ID</th>
                    <th>First_Name</th>
                   <th>User_Name</th>
                   <th>Email</th>
                   <th>Phone</th>
                  </tr>
                </thead>


<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
include_once 'includes/dbh.inc.php';



if (isset($_SESSION['user_id']) == true) {


  $userID = $_SESSION['user_id'];

  $userQuery = "SELECT * FROM users WHERE user_id = '$userID'";
  if ($userResult = mysqli_query($conn, $userQuery)) {
    $userRow = mysqli_fetch_assoc($userResult);



          echo "<tr><form action='includes/editUser.inc.php' method=POST>";
          echo "<td><input type=text name=id value='".$userRow['user_id']."'</td>";
          echo "<td><input type=text name=Name value='".$userRow['full_name']."'</td>";
          echo "<td><input type=text name=uid value='".$userRow['user_uid']."'</td>";
          echo "<td><input type=text name=email value='".$userRow['user_email']."'</td>";
          echo "<td><input type=text name=phone value='".$userRow['user_phone']."'</td>";
     
     echo "<td><input type=submit value=update>";
     echo"</form></tr>";
      }
    }


        ?>
  </table>
</div>

</div>


</div>
    <script src="../js/form-validation.js"></script>

  </body>
</html>

