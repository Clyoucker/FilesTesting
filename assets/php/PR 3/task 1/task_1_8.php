<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// </Задание 8>

$array = array(4,-2,5,19,-130,0,10);
$min = min($array); $max = max($array);

consoleLog(["min: $min","max: $max"]);

// </Задание 8>