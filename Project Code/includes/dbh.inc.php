<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bookfinder";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Unable to connect");

// mysql_query("SET CHARACTER SET utf8", $conn);
// mysql_query("SET SESSION collation_connection ='utf8_general_ci'", $conn);
