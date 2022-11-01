<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// <Задание 3>

$a = 2;
$st = pow($a,10) ;

consoleLog([$st]);

// </Задание 3>
