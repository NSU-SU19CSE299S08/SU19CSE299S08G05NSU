<?php
session_start();

?>

?>

<?php
session_start();

if(!isset($_SESSION['a_id']))
{
	header("Location:login.php");
    exit;
}
include_once "dbh.inc.php";

?>