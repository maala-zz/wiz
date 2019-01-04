<?php
require 'connect.php';
session_start() ;
$name = $_POST["name"];
$password = $_POST["password"];
$sqlSelectResturant = "SELECT * FROM `resturant_info` where name='$name' and password='$password'";
$res = mysqli_query($con, $sqlSelectResturant);
if (mysqli_num_rows($res)) {
    $_SESSION["userName"] = $name ;
    print "<script language='Javascript'>document.location.href='mealsview.php' ;</script>";
} else {
    print "<script language='Javascript'>document.location.href='signin.php' ;</script>";
}
