<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="mathfunctions.php" method="post">
        <label for="">radius:</label><br>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>

</html>
<?php
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);
// $total = pow($x, $y);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand(90, 100);

//echo $total;

$radius = $_POST["radius"];
$circumference = null;
$area = null;

$circumference = 2 * pi() * $radius;
$area = pi() * $radius * $radius;

$circumference = round($circumference, 2);
$area = round($area, 2);

echo "Circumference of the circle is = {$circumference}cm <br>";
echo "Area of the circle = {$area}cm<sup>2</sup>";
?>