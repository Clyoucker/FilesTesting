<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {var_dump($args[$i]);}}


//Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей.
//Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.
function getDivisors($arg){
    $array = array();
    for($i=1; $i < $arg; $i++) {if ($arg % $i == 0) {array_push($array,$i);}}
    return $array;
}

function getCommonDivisors($args=[]){
    $array = array();
    for ($i = 0; $i < count($args); $i++){
        $arr = getDivisors($args[$i]);
        foreach($arr as $value){array_push($array,$value);}
    }
    return array_unique($array);
}

consoleLog([getCommonDivisors([36,24])]);
print_r(getCommonDivisors([36,24]));
