<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}

// Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и меньше 10.
// Если это так - пусть функция возвращает true, если не так - false.
function isNumberInRange($arg){return ($arg > 0 && $arg < 10) ? true : false;}
// принимает 1 параметр и сравнивает его с диапазоном чисел
consoleLog([isNumberInRange(10)]);
