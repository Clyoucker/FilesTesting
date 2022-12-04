<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a равна '1' и по значению и по типу, то выведите 'Верно'
//иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном '1', 1, 3.

$a = "1";

if ($a === "1"){consoleLog(["True"]);}
else{consoleLog(["False"]);}
