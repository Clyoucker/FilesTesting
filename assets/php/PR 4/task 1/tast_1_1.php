<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}

//Сделайте функцию, которая возвращает квадрат числа. Число передается параметром.
function duble($arg) {return $arg*=$arg;}
//принимает 1 параметр и возвращает его же, но умноженого на само себя.
consoleLog([duble(4)]);