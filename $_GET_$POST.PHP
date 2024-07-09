<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="$GET_$POST.php" method="post">
        <label for="">Username: </label><br>
        <input type="text" name="username"> <br>
        <label for="">Password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
</body>

</html>

<?php
 $username = $_POST["username"];
 $password = $_POST["password"];
 echo "{$_POST["username"]} <br>";
 echo "{$_POST["password"]} <br>";

//$_GET = Data is appended to the url
//        NOT SECURE
//        char limit
//        Bookmark is possible with values
//        GET requests can be cached
//        Better for a search engine

//$_POST = Data is packaged inside the body of the HTTP request
//        MORE SECURE
//        No data  limit
//        Cannot bookmark
//        GET requests are not cached
//        Better for submitting credentials
?>