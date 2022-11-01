<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// <Задание 6>

$a = 379;
$sqrt = sqrt($a);
$rd = ceil($sqrt);
$rd_2 = round($sqrt,1);
$rd_3 = round($sqrt,2);

consoleLog(["round 1: $rd","round 2: $rd_2","round 3: $rd_3"]);

// </Задание 6>
