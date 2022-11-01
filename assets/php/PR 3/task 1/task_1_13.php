task_1_1.php<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// <Задание 13>

$a = 30;
$arr=array();

for ($i = 1; $i <= $a; $i++) {if ($a % $i == 0) array_push($arr,$i);}

consoleLog([$arr]);

// </Задание 13>






