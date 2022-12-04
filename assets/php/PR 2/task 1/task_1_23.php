<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'.
//Если это так - выведите 'да', в противном случае выведите 'нет'.

$str = "abcde";

if (str_starts_with($str,"a")){consoleLog(["Yes"]);}
else{consoleLog(["No"]);}
