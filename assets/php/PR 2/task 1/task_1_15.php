<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно',
//иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.

$a = 2;

if ($a > 0 && $a < 5){consoleLog(["True"]);}
else{consoleLog(["False"]);}

($a > 0 && $a < 5) ? consoleLog(["True"]) : consoleLog(["False"]);
