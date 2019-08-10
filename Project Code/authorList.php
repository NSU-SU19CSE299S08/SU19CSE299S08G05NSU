<?php
include_once 'includes/dbh.inc.php';


$authorSql = "SELECT * from bookinfo";
$authorSqlData = mysqli_query($conn,$authorSql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors || BookFinder</title>

    <!-- -css files- -->
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
   <link rel="stylesheet" href="css/authorList.css">
  <link rel="stylesheet" href="css/index1.css" />

  <!-- js files -->

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
</head>
<body>
    <header>
        <?php
            // include'includes/header.inc.php';
        
        ?>
    </header>
    <section class="author">
        <div class="container">
            <div class="row text-center">
                <?php while($row = mysqli_fetch_assoc($authorSqlData)) { ?>
                <div class="col-md-3 authorProfile">
                    <a href="authorBooksList.php?page=authorBooksList&ID=<?php echo $row['ID'] ?>">
                        <img src="img/author/author.jpg" alt="<?php echo $row['AuthorName'] ?>">
                        <h5 class="mt-3"><?php echo $row['AuthorName'] ?></h5>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>
</html>