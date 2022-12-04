<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $var НЕ равна true, то выведите 'Верно', иначе выведите 'Неверно'.
//Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной.

$var = false;

if ($var !== true){consoleLog(["True"]);}
else{consoleLog(["False"]);}

$var !== true ? consoleLog(["True"]) : consoleLog(["False"]);
