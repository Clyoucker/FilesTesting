<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="year" value="<?php echo($_GET["year"] ?? date("Y")); ?>">
    <input type="submit">
</form>

<?php
 if(!empty($_GET)){
     function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo '<pre>'; echo $args[$i] ; echo '</pre>';}}
     function isEven($arg){if ($arg % 2 == 0 && $arg % 4 == 0){return true;} else return false;}
     $year = $_GET["year"];
     consoleLog([(isEven($year) == true ? "Высокосный" : "Не высокосный")]);
 }
?>

</body>
</html>
