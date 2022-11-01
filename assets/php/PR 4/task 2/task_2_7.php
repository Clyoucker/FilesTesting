<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}


//Сделайте функцию getDivisors,
//которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится данное число).

function getDivisors($arg){
    $array = array();

    for($i=1; $i < $arg; $i++){
        if ($arg % $i == 0) {array_push($array,$i);}
    }
    return $array;
}

consoleLog([getDivisors(36)]);
