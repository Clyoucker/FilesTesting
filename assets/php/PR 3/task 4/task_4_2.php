<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

$array = array_sum(range(1, 100));

consoleLog([$array]);
