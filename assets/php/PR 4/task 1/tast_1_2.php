<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}

//Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.
function sum($arg_1,$arg_2) {return $arg_1 + $arg_2;}
//принимает 2 параметра и возвращает их сумму
consoleLog([sum(2,4)]);