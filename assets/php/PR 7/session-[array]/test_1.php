<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    session_reset();
    session_start();

    if (!empty($_GET)) {
        $_SESSION["user"] = $_GET;
    }
?>
<form method="get">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="text" name="selary">
    <input type="text" name="desc">
    <input type="submit">
</form>
</body>
</html>