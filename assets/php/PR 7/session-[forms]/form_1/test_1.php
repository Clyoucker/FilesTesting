<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    session_start();

    if (!empty($_GET)) {
        $_SESSION["name"] = $_GET["name"];
        $_SESSION["midle"] = $_GET["midle"];
        $_SESSION["down"] = $_GET["down"];
    }
?>
<form method="get">
    <input type="text" name="name">
    <input type="text" name="midle">
    <input type="text" name="down">
    <input type="submit">
</form>
</body>
</html>