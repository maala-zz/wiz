<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ven";
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to Ven: " . mysqli_connect_error();
}