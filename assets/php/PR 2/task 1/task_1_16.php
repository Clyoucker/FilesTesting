<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе поделите ее на 10.
//Выведите новое значение переменной на экран. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.

$a = 1;

if ($a == 0 || $a == 2){return $a = $a + 7;}
else{return $a = $a / 10;}

consoleLog([$a]);
