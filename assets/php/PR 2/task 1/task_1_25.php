<?php

function consoleLog($args=array()){for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}}
function getDigitsSum($arg) {$arg = (int)$arg; $array = str_split($arg); return array_sum($array);}

//Дана строка из 3-х цифр. Найдите сумму этих цифр.
//То есть сложите как числа первый символ строки, второй и третий.

$str = "325";
consoleLog([getDigitsSum($str)]);

