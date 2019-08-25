<?php
include 'includes/dbh.inc.php';


$sql = "SELECT * FROM bookinfo";
$result = mysqli_query($conn, $sql);



?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books || BookFinder</title>
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
</head>

<body>
    <section class="allBookList">
        <div class="container">
            <div class="row">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-4">
                    <div class="sfbook1 text-center">
                        <div class="sfbook1-content">
                            <a href="bookDetails.php?page=bookDetails&ID=<?php echo $row['id'] ?>"><img src="<?php echo $row['BookImage'] ?>" alt="<?php echo $row['BookName'] ?>" />
                                <h4><?php echo $row['BookName'] ?></h4>
                                <p><?php echo $row['AuthorName'] ?></p>
                            </a>
                        </div>

                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>

</html>