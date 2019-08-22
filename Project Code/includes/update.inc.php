<?php
include 'dbh.inc.php';
         $sql="UPDATE users SET user_id='$_POST[id]',full_name='$_POST[Name]',user_uid='$_POST[uid]',user_email='$_POST[email]',user_phone='$_POST[phone]' WHERE user_id=$_POST[id]";
		 if(mysqli_query($conn,$sql))
		 {
			 header("Location:../update.php?success");
		 }
		 else
		 {
			 echo "Not update";
		 }
		 
		 
?>