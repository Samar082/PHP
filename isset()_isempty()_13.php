<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset()_isempty().php" method="post">
        <label for="">Username: </label><br>
        <input type="text" name="username"> <br>
        <label for="">Password: </label><br>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php
  // isset() = Returns true if a variable is declared, and not  null
  // empty = returns true if a variable is not declared , false, null

  $number = true;

//   if(isset($number)){
//     echo"Variable is set";
//   }
//   else{
//     echo"Variable is not set";
//   }

// if(empty($number)){
//  echo"Variable is empty";
// }
// else{
//     echo"Variable is not empty";
// }

foreach($_POST as $key => $value){
    echo"{$key} = {$value} <br>";
}

// $username = $_POST["username"];
// $password = $_POST["password"];

// if(empty($username)){
//     echo "Username is missing <br>";
// }
// echo "Username = {$username} <br>";
// echo "Password = {$password} <br>";

?>