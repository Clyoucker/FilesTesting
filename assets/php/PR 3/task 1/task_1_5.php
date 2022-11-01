<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// <Задание 5>

$a = array(4,2,5,19,13,0,10);
$res = 0;

foreach ($a as $value) $res += $value;

consoleLog([sqrt($res)]);

// </Задание 5>





