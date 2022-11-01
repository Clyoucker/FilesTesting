<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// <Задание 7>

$a = 587;
$array = array("floor" => floor($sqrt=sqrt($a)),"ceil"=> ceil($sqrt=sqrt($a)));

consoleLog([$array]);

// </Задание 7>