<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

$array = array(23,6,2,543);
$res = array_sum($array) / count($array);

consoleLog([$res]);
