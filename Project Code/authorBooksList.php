<?php 
include_once 'includes/dbh.inc.php';

$sql = "SELECT * from bookinfo where ID =".$_GET['ID'];
$result = mysqli_query($conn,$sql);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- -css files- -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/authorBooksList.css" />
    <link rel="stylesheet" href="css/index1.css">

    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/index1.js"></script>
</head>
<body>
        
                

        <section class="bookList">
            <div class="container">
                <div class="row mt-5 text-center">
                  <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <div class="col-md-3">
                            <div class="bf19book1">
                                    <div class="bf19-content">
                                      <a href="" title="<?php echo $row"
                                        ><img src="img/bookfair19/gonegirl.jpg" alt="গন গার্ল"
                                      /></a>
                                      <a href="" title="গন  গার্ল"><h5>গন গার্ল</h5></a>
                                      <a href=""><p>গিলিয়ান ফ্লিন</p></a>
                                    </div>
                                    
                                  </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>