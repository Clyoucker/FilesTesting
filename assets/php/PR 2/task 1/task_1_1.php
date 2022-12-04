<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a равна нулю, то выведите 'Верно',
//иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.

$a = 0;

if ($a == 0){
    consoleLog(["True"]);
} else{
    consoleLog(["False"]);
}
