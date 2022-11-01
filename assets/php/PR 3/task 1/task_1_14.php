task_1_1.php<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// <Задание 14>

$array = array(1,2,3,4,5,6,7,8,9,10);
$sum = 0;

for ($i = 0; $i < count($array); $i++){
    $sum += $array[$i];
    if ($sum > 10 || $array[$i] > 10){consoleLog(["нужно сложить $i первых элемента,чтобы {value} > 10"]); break;}
}

// </Задание 14>





