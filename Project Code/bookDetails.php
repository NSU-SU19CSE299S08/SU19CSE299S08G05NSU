
<?php include_once 'includes/dbh.inc.php'; ?>


<?php 
  // if(!isset($_GET['ID'])){
  //   header('Location:index1.php');
  // }
    
  $sql = "SELECT * from bookinfo where ID =".$_GET['ID'];
  

  if($result = mysqli_query($conn,$sql)){
    $row = mysqli_fetch_assoc($result);
  


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $row['BookName'] ?> | Book Finder</title>

  <!-- -css files- -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bookDetails.css">

    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/deyal.js"></script>
</head>
<body>
  <header class="header-area"> <!---header area starts----->
      <div class="logo-bar">  <!---logo area starts----->
        <div class="logo"><a href="index1.html">BookFinder</a></div>
        <div class="signin text-right">


          
          <a href="login.html" class="btn btn-outline-dark "  > LogOut</a>


        </div>

    </div>   <!-------logo area ends----->

<div class="menu-search">
    <nav class="main-menu">

      <ul>
        <li><a class="active" href="../../index1.html">home</a></li>
        <li><a href="javascript:void(0)">লেখক</a>
          <ul>
            <li><a href="#">হুমায়ুন আহমেদ</a></li>
            <li><a href="#">মুহম্মদ জাফর ইকবাল</a></li>
            <li><a href="#">জহির রায়হান</a></li>
            <li><a href="#">সমরেশ মজুমদার</a></li>
            <li><a href="#">See More...</a></li>
          </ul>

        </li>
        <!-- <li><a href="javascript:void(0)">বিষয়</a>
          <ul>
            <li><a href="#">উপন্যাস</a></li>
            <li><a href="#">গল্প</a></li>
            <li><a href="#">সায়েন্স ফিকশন</a></li>
            <li><a href="#">কবিতা</a></li>
            <li><a href="#">See More...</a></li>
          </ul> -->
        </li>
        <li><a href="javascript:void(0)">প্রকাশনী</a>
          <ul>
            <li><a href="#">Sheba Publisher</a></li>
            <li><a href="#">রাকিউট টেক পাবলিশিং</a></li>
            <li><a href="#">রুপা এ্যান্ড কো</a></li>
            <li><a href="#">স্টকপোলে বুকস</a></li>
            <li><a href="#">See More...</a></li>
          </ul></li>
        <li><a class="text-danger" href="#">বইমেলা ২০১৯</a></li>
      </ul>


    </nav>

    <div class="search">
      <input type="text" placeholder="Search Here..">
      <a href="#"><button type="button" name="button"><i class="fas fa-search"></i></button></a>
    </div>

</div>





  </header>  <!---header area ends----->

 
  <div class="container1">
    <div class="bookDetail">
      <div class="bookImg">
        <img src="<?php echo $row['BookImage']; ?>" alt="<?php echo $row['BookName'];?>">
      </div>
      <div class="bookInfo">
        <h1><?php echo $row['BookName'];?></h1>
        <a href="#"><?php echo $row['AuthorName'];?></a>
        
        <p>TK. <?php echo $row['BookPrice'];?></p>
        
      </div>
    </div>

      <div class="bookSpecification">
        <h3 class="display-4">Specification of the Book:</h3>
        <table class="table table-bordered mb-3">
          <tr>
            <td>Title</td>
            <td><?php echo $row['BookName'];?></td>
          </tr>
          <tr>
            <td>Author</td>
            <td><?php echo $row['AuthorName'];?></td>
          </tr>
          <tr>
            <td>Publisher</td>
            <td><?php echo $row['PublisherName'];?></td>
          </tr>
          <tr>
            <td>ISBN</td>
            <td><?php echo $row['ISBN'];?></td>
          </tr>
          <tr>
            <td>Language</td>
            <td><?php echo $row['BookLanguage'];?></td>
          </tr>
        </table>
      </div>
<?php } ?>











  </div>


</body>
</html>
