<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или равна 6-ти и меньше 14-ти, то выведите 'Верно',
//в противном случае выведите 'Неверно'.

$a = 1;
$b = 2;

if ($a > 2 && $a < 11 || $b >= 6 || $b < 14){consoleLog(["True"]);}
else{consoleLog(["False"]);}

