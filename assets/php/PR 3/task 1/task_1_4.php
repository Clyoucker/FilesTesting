<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// <Задание 4>

$a = 245;
$st = sqrt($a) ;

consoleLog([$st]);

// </Задание 4>