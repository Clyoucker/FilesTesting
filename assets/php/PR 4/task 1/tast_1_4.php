<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}

define("WEEKS",array("Пн","Вт","Ср","Чт","Пт","Сб","Вс"));

//Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.
function day($arg){if ($arg >= 1 || $arg <= 7){return WEEKS[$arg];} else return false;}
//принимает 1 параметр и возвращает день недели, доставая дент из константы WEEKS по индексу
consoleLog([day(2)]);