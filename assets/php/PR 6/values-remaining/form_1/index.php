<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="city" value="<?php echo($_GET["city"] ?? "None"); ?>">
    <input type="text" name="country" value="<?php echo($_GET["country"] ?? "None"); ?>">
    <input type="submit">
</form>

<?php
 if(!empty($_GET)){
     function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo '<pre>'; echo $args[$i] ; echo '</pre>';}}
     $city = $_GET["city"];
     $country = $_GET["country"];
     consoleLog(["city: $city","country: $country"]);

 }
?>

</body>
</html>
