<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="while_loops_10.php" method = "post">
        <input type="submit" value="stop">

    </form>
</body>
</html>

<?php
   //while loop = do some code infinitely while some condition remains true
   $value = true;
   $counter = 0;

   while($value){
        if(isset($_POST["stop"])){
            $value = false;
        }
        else{
            $counter++;
            echo"{$counter} <br>";
        }

   }
?>