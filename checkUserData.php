<?php
require 'connect.php';
session_start() ; // start session in this script to put in user name
/**
 * get name and password of the form, we set the method=post in the form body
 */
$name = $_POST["name"];
$password = $_POST["password"];
// query on this user, so if the number of records > 0, then th user data is correct
$sqlSelectResturant = "SELECT * FROM `resturant_info` where name='$name' and password='$password'";
$res = mysqli_query($con, $sqlSelectResturant);
if (mysqli_num_rows($res)) { // ==> the user exist
    // put name in the session and call mealsview.php script
    $_SESSION["userName"] = $name ;
    print "<script language='Javascript'>document.location.href='mealsview.php' ;</script>";
} else {
    // user not exist, call signin.php script
    print "<script language='Javascript'>document.location.href='signin.php' ;</script>";
}
