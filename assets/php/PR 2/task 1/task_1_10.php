<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'.

$a = 3;

if (!is_null($a) || !empty($a)){consoleLog(["True"]);}
else{consoleLog(["False"]);}
