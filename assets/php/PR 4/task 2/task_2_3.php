<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}

//Сделайте функцию getDigitsSum (digit - это цифра),
// которая параметром принимает целое число и возвращает сумму его цифр.
function getDigitsSum($arg) {$array = str_split($arg); return array_sum($array);}

consoleLog([getDigitsSum(435)]);
