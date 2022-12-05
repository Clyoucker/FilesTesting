<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
if (empty($_GET)) {
    ?>
    <form action="" method="GET">
        <input name="name" placeholder="Name: ">
        <input type="submit">
    </form>
    <?php
} else {
    $name = $_GET["name"];
    echo "Hello $name!";
}
?>

</body>
</html>
