<?php
/**
 * this script to connect to database, any time you want to connect db just write
 * require "connect.php", and here you go!
 */
$servername = "localhost"; // host name
$username = "root"; // we can add another users from php-my-admin, this is the deafult user
$password = ""; // deafult password 
$db = "ven"; // database name
// try connect database 
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to Ven: " . mysqli_connect_error();
}