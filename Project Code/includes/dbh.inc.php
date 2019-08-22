<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bookfinder";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName) or die("Unable to connect");

//   mysql_select_db('bookfinder') or die(mysql_error());
//  mysql_query("SET CHARACTER SET utf8");
//   mysql_query("SET SESSION collation_connection ='utf8_general_ci'");
