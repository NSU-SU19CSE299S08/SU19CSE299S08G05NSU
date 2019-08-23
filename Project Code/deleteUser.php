
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
        
                      <li class="nav-item"><a class="nav-link" href="viewUser.php">View User</a></li>
                      <li class="nav-item"><a class="nav-link" href="update.php">Update user</a></li>
                      <li class="nav-item"><a class="nav-link" href="deleteUser.php">Delete user</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                  </ul>
              </div>
            </nav>
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

                while ($row=mysqli_fetch_array($result)) {

                    echo "<tr><form action='includes/delete.inc.php' method=POST>";
                    echo "<td><input type=text name=id value='".$row['user_id']."'</td>";
                    echo "<td><input type=text name=Name value='".$row['full_name']."'</td>";
                    echo "<td><input type=text name=uid value='".$row['user_uid']."'</td>";
                    echo "<td><input type=text name=email value='".$row['user_email']."'</td>";
                    echo "<td><input type=text name=phone value='".$row['user_phone']."'</td>";

                    echo "<td><input type=submit value=Delete>";
                    echo"</form></tr>";
                }


                  ?>
        </table>
        </div>

        </div>


        </div>
    <script src="../js/form-validation.js"></script>

  </body>
</html>