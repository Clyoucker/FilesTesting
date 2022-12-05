<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="surname">
    <input type="text" name="name">
    <input type="text" name="patronymic">
    <input type="submit">
</form>

<?php
    if(!empty($_GET)){
        echo $_GET["name"];
    }
?>

</body>
</html>
