<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'.


if (!isset($a)){consoleLog(["True"]);}
else{consoleLog(["False"]);}
