<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}

//Найдите все года от 1 до 2022, сумма цифр которых равна 13.
//Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.
function getDigitsSum($arg) {$array = str_split($arg); return array_sum($array);}

$array_years = range(1,2022);

function years($array){
    $new_array = array();
    for ($i = 0; $i < count($array); $i++) {(getDigitsSum($array[$i]) == 13) ? array_push($new_array,$array[$i]) : false;}
    return $new_array;
}

$new_array_years = years($array_years);
consoleLog([$new_array_years]);
// func "years" принимает массив с годами и благодаря "for..i" и добавляет в новый массив те года, которые == 13 и возвращаеь сам массив.
