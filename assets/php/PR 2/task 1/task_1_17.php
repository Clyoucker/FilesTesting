<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных, иначе выведите их разность (результат вычитания).
//Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.

$a = 1;
$b = 2;
$res;

if ($a <= 1 && $b >= 3){return $res = $a + $b;}
else{return $res = $a - $b;}

consoleLog([$res]);
