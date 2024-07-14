<?php

//    $food_1 = "apple";
//    $food_2 = "orange";
//    $food_3 = "banana";
//    $food_4 = "guava";

$foods = array("apple", "orange", "banana", "guava");

// echo $foods[0];
// array_push($foods, "grapes", "pineapple", "watermelon");
// array_pop($foods);
// array_shift($foods);
// $foods = array_reverse($foods);
echo count($foods) ."<br>";

foreach($foods as $food){
    echo $food . "<br>";
}



?>