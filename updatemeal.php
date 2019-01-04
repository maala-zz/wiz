<!DOCTYPE html>
<?php
require('connect.php') ;
// get the id from the request
$mealId = $_GET['id'] ;
// query to get the current meal data
$sqlSelectMeal = "SELECT * from `meal` where id=".$mealId ;
$res = mysqli_query($con,$sqlSelectMeal) ;
// save the data in $meal
$meal = mysqli_fetch_assoc($res) ;
//-------------------------------
/**
 * it's behaviour as a listener, 
 * when submitting the updating form it will excecute this block
 */
if( isset($_POST['UpdateMeal']) ){
	// git the new data from the form, and simply update the meal information 
    $name = $_POST['name'] ;
    $category = $_POST['category'] ;
    $instruction = $_POST['instruction'] ;
    $sqlUpdateMeal = "UPDATE `meal` SET `name`='$name' , 
	 				 `instruction`='$instruction', `category`='$category'
					  where `id`='$mealId'" ;
    $res = mysqli_query($con,$sqlUpdateMeal) ;
    if( !$res ){
        echo "Something went wrong" ;
    }
    else {
        header("Refresh:0");
    }
}
?>
<html>

<head>
	<title>Demo</title>

	<meta charset="utf-8" />

	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>

	<h2>Update Meal <?php echo $meal['name'] ?></h2>

	<form class="form" method="post" >

		<p class="text">
			<input type="text" name="name" id="name" maxlength="100" value="<?php echo $meal['name'] ?>" />
			<label for="name">Name</label>
		</p>

        <p class="name">
			<input type="text" name="category" id="category" value="<?php echo $meal['category'] ?>" />
			<label for="name">Category</label>
		</p>

        <p class="text">
			<input type="text" size="200" name="instruction" id="instruction" value="<?php echo $meal['instruction'] ?>" />
			<label for="name">Instruction</label>
		</p>

		<p class="submit">
			<input type="submit" name="UpdateMeal" value="Update" />
		</p>
	</form>

    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="mealsview.php">Meals</a>
 
</body>

</html>
