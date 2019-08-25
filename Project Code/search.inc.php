<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Result || BookFinder</title>

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






    <?php
    if (isset($_POST['submit'])) {
        // after click the login button page will connect to tha database

        include_once 'includes/dbh.inc.php';

        // fetch data from client

        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM bookinfo WHERE BookName LIKE '%$search%' OR AuthorName LIKE '%$search%' OR PublisherName LIKE '%$search%' ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {

            ?>



    <div class="container1">

        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-4">

                <a href="bookDetails.php?page=bookDetails&ID=<?php echo $row['id'] ?>"><img src="<?php echo $row['BookImage'] ?>" alt="<?php echo $row['BookName'] ?>" />
                    <h4><?php echo $row['BookName'] ?></h4>
                    <p><?php echo $row['AuthorName'] ?></p>
                    <p><?php echo $row['BookPrice'] ?></p>
                </a>
            </div>
            <?php } ?>

        </div>
    </div>
    </div>

    </div>
    <!-- echo  $row['BookName'];
                echo  $row['AuthorName'];
                echo  $row['BookPrice']; -->


    <?php

        } else {
            header("Location:../index1.php?search=NoFound");
        }
    } else {
        header("Location:../index1.php?search=error");
        exit();
    }
    ?>

</body>

</html>