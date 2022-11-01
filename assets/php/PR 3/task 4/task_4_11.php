<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

$str = "1234567890";
$array = str_split($str,2);
$sum = array_sum($array);
consoleLog([$sum]);

