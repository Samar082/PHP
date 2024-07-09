<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arithmetic.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x"> <br>
        <label for="">y:</label>
        <input type="text" name="y"> <br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
  
 //Arithmetic Operators 
 // +, -, *, /, %, **

 // $z = $x + $y;
 // $z = $x - $y;
 // $z = $x * $y;
 // $z = $x / $y;
 // $z = $x ** $y;
  $z = $x % $y;

  echo$z;

  //Increment/Decrement operators

  $counter = 0;

  $counter-=2;
  echo$counter;

  //Operator precedence
  //()
  //**
  //* / %
  //+ -

  $total = 1 + 2 - 3 * 4 / 5 ** 6;
  // 1 + 2 - 3 * 4 / 15625; //5^6
  // 1 + 2 - 12 / 15625; // 3*4
  // 1 + 2 - 0.000768;

  echo $total;
?>