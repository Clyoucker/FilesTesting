<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}

//Сделайте функцию isEven() (even - это четный),
//которая параметром принимает целое число и проверяет: четное оно или нет.
//Если четное - пусть функция возвращает true, если нечетное - false.
function isEven($arg){if ($arg % 2 == 0){return true;} else return false;}

consoleLog([isEven(4)]);
//Тут просто нечего комментировать