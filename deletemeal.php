<?php
require 'connect.php';
header('Location: '.'mealsview.php'); // finish your work and go back to mealsview.php
/**
 * if the script received the id the delete the selected meal
 */
if (isset($_GET['id'])) {
    deleteSelectedMeal();
}
function deleteSelectedMeal()
{
    /**
     * function in php can't see globally vars, so import them
     */
    // $con => connect script
    global $con ;
    // simply delete the meal
    $sqlDeleteSelectedMeal = "DELETE FROM `meal` where id = " . $_GET['id'];
    mysqli_query($con, $sqlDeleteSelectedMeal);
}