<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}


//Дан массив с целыми числами.
//Создайте из него новый массив, где останутся лежать только четные из этих чисел.
//Для этого используйте вспомогательную функцию isEven из предыдущей задачи.
function isEven($arg){if ($arg % 2 == 0){return true;} else return false;}

$array = array(1,65,3,23,2,7,6);
$new_array = array();

foreach($array as $value){if (isEven($value)){array_push($new_array,$value);}}

consoleLog([$new_array]);

