<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}

//Дан массив с числами.
//Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти.
//Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи.
function isNumberInRange($arg){return ($arg > 0 && $arg < 10) ? $arg : null;}

$array = array(1,65,2,54,4);
$new_array = array();
for ($i = 0; $i < count($array); $i++) {if (isNumberInRange($array[$i])) {array_push($new_array,$array[$i]);}}
consoleLog($new_array);
// просто добавляет в новых массив значения, которые удовлетворяют условию в isNumberInRange

