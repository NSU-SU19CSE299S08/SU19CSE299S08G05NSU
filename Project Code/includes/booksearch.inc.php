<?php
if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $search = mysqli_real_escape_string($conn,$_POST['search']);

    if(empty($search)){
        header("Location:../index1.php?login=error");
        exit();
    }else{
        $sql="SELECT * FROM bookinfo WHERE BookName='$search'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);

        if($resultCheck<1){
            header("Location:../index1.php?login=error");
            exit();
        }else{
            $rows=mysqli_fetch_assoc($result);

            echo $rows['BookName'];

            // need to add code for showing book details here 
        }

    }

    
} else {
    echo 'not submitted';
}


?>