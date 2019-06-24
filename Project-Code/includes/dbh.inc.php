<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="BookFinder";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("Unable to connect");