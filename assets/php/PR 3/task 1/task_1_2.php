<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// <Задание 2>

$a = 10; $b = 3;
$res = $a % $b;

if ($res == 0) consoleLog(["Делится","res: $res"]);
else consoleLog(["Делится с остатком","res: $res"]);

// </Задание 2>
