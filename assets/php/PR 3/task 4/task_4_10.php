<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

$strs = range('a', 'z');
$numbers = range(1, 26);
$array = array_combine($strs, $numbers);

consoleLog([$array]);
