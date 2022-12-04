<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'.
//Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.

$a = 3;

if (is_null($a) || empty($a)){consoleLog(["True"]);}
else{consoleLog(["False"]);}
