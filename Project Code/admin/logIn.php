<?php

session_start();

if(isset($_POST['submit'])){
    // after click the login button page will connect to tha database

    include 'dbh.inc.php';
}