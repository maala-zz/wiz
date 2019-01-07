<?php
require "connect.php" ;

$sqlDeleteAll = "Delete * from `meal`" ;
$res = mysqli_query($con, $sqlDeleteAll);
$link = "https://www.themealdb.com/api/json/v1/1/latest.php" ;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $link,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$character = json_decode($response,true);
$arr = $character["meals"] ;

// insert meals into database
for($i = 0 ; $i < count($arr) ; $i++){
    $name = $arr[$i]["strMeal"] ;
    $category = $arr[$i]["strCategory"] ;
    $instruction = substr($arr[$i]["strInstructions"], 0, min( 300, strlen($arr[$i]["strInstructions"]) ) ) ;
    $image = $arr[$i]["strMealThumb"] ;
    $sqlInsertMeal = "INSERT INTO `meal` 
                           ( `name`, `category`, `instruction`, `image`)
                     VALUES('$name','$category','$instruction','$image')";

$res = mysqli_query($con, $sqlInsertMeal);
if( !$res ){
    echo "no</br>" ;
}
else {
    echo "yes</br>" ;
}
}
// echo $arr ;
?>
