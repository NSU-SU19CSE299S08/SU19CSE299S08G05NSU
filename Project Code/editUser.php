<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Update Profile</title>

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
  <h1 class="display-4">My Profile</h1>

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
          echo "<td><input type=text name=id value='" . $userRow['user_id'] . "'</td>";
          echo "<td><input type=text name=Name value='" . $userRow['full_name'] . "'</td>";
          echo "<td><input type=text name=uid value='" . $userRow['user_uid'] . "'</td>";
          echo "<td><input type=text name=email value='" . $userRow['user_email'] . "'</td>";
          echo "<td><input type=text name=phone value='" . $userRow['user_phone'] . "'</td>";

          echo "<td><input class='btn btn-success' type='submit' value='Confirm'>";
          echo "</form></tr>";
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