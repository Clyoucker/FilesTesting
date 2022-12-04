<?php

function consoleLog($args=array()){for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}}
function getDigitsSum($arg) {$arg = (int)$arg; $array = str_split($arg); return array_sum($array);}

//Дана строка из 6-ти цифр.
//Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.
//Если это так - выведите 'да', в противном случае выведите 'нет'.

$str = "251512";

if (getDigitsSum(substr($str,0,3)) == getDigitsSum(substr($str,3))){consoleLog(["Yes"]);}
else {consoleLog(["No"]);}
