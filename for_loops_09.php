<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for_loops_09.php" method="post">
        <label for="">Enter a number to count down form: <br></label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>
<?php
  // for loop = repeat some code certain # of times
  
  $counter1 = $_POST["counter"];

  for($i = 100;$i >= 1; $i--){
    echo $i . "<br>";
  }

?>