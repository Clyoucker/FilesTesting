<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// <Задание 1>


$a = 10; $b = 3;
$res = $a % $b;
consoleLog([$res]);


// </Задание 1>






