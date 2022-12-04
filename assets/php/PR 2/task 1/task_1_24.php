<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Дана строка с цифрами, например, '12345'.
//Проверьте, что первым символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да', в противном случае выведите 'нет'.

$str = "12345";
$start = (int)$str[0];

if ($start >= 1 || $start <= 3){consoleLog(["Yes"]);}
else{consoleLog(["No"]);}
