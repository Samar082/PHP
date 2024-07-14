<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="filterInput_18.php" method="post">
        <label for="">username: </label> <br>
        <input type="text" name="username"> <br>
        <label for="">age: </label> <br>
        <input type="text" name="age"> <br>
        <label for="">email: </label> <br>
        <input type="text" name="email"> <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {

    //###############Sanitize input###########

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT );

    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    //#############Validate Input############

    if (empty(filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT))) {
        echo "Please enter a valid iput";
    } else {
        $age = $_POST["age"];
        echo "your age is: {$age}";
    }

    if (empty(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL))) {
        echo "Please enter a valid iput";
    } else {
        $email = $_POST["email"];
        echo "your email is: {$email}";
    }
}
?>