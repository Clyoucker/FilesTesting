<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}

//Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
function minus($arg_1,$arg_2) {return ($arg_1 - $arg_2)/3;}
//принимает 2 параметр и возвращает их сумму, которая была поделина на 3
consoleLog([minus(4,2)]);
