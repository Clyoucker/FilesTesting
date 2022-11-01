<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

$value = str_split(46);
$sum = array_sum($value);
var_dump($sum);

