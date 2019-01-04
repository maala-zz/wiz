<?php
require 'connect.php';
header('Location: '.'mealsview.php');
if (isset($_GET['id'])) {
    deleteSelectedMeal();
}
function deleteSelectedMeal()
{
    global $con ;
    echo 'I just ran a php function on' . $_GET['id'];
    $sqlDeleteSelectedMeal = "DELETE FROM `meal` where id = " . $_GET['id'];
    mysqli_query($con, $sqlDeleteSelectedMeal);
}