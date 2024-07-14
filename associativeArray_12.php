<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="associativeArray.php" method="post">
        <label for="">Country: </label>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>


</body>

</html>
<?php
// associative array = An array made of key=>value pairs

// countries => capitals
// id => username
// item => price

$capitals = array(
    "USA" => "Washington D.C",
    "Japan" => "Tokyo",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);
//$capitals["USA"] = "Las Vegas";
//$capitals["China"] = "Beijing";
//array_pop($capitals);
//array_shift($capitals);
//$keys = array_keys($capitals);
//$values = array_values($capitals);
//$flipping_array = array_flip($capitals);
//$capitals = array_reverse($capitals);


//   foreach($capitals as $key => $value){
//     echo"{$key} = {$value} <br>";
//   }

$capital = $capitals[$_POST["country"]];
echo $capital;
?>