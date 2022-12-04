<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a существует, то выведите 'Верно',
//иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 3 и null.

$a = null;

if (isset($a)){consoleLog(["True"]);}
else{consoleLog(["False"]);}
