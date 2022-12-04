<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a равна 'test', то выведите 'Верно',
//иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 'test', 'тест', 3.

$a = "test";

if ($a === "test"){consoleLog(["True"]);}
else{consoleLog(["False"]);}
