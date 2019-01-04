<?php
header('Location: '.'signup.php');
require('connect.php') ;
if (isset($_POST['reserve'])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $website = $_POST["website"];
    $password = $_POST["password"];
    $sqlInsertResturant = "INSERT INTO `resturant_info` (`name`,`password`,`website`,`complaint_phone`)
                           VALUES('$name','$password','$website','$phone')";
    $res = mysqli_query($con, $sqlInsertResturant);
}
