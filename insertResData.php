<?php
header('Location: '.'signup.php'); // go to signup.php page when you finish!
require('connect.php') ; // connect database
/**
 * it works as a listener ot sign up form submitting, BTW we can delete if block !
 * Bcause we call it only in case of submmitting
 */
if (isset($_POST['reserve'])) {
    // get name, phone, password, website
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $website = $_POST["website"];
    $password = $_POST["password"];
    /**
     * insert the resturant data in the database, in term of signing up
     */
    $sqlInsertResturant = "INSERT INTO `resturant_info` 
                                        (`name`, `password`, `website`,`complaint_phone`)
                                  VALUES('$name','$password','$website','$phone')";
                                  
    $res = mysqli_query($con, $sqlInsertResturant);
}
