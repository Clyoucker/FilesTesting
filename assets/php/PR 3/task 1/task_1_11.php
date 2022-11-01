task_1_1.php<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// </Задание 11>

$a = 8; $b = 2;

function modul($a,$b){
    if ($a > 0 && $b > 0) return $a - $b;
    else if ($a < 0 && $b < 0) return -1*($a - $b);
    else
        if ($a - $b < 0) return -1*($a - $b);
        else return $a - $b;
}

consoleLog([modul($a,$b)]);

// </Задание 11>