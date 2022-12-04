<?php

function consoleLog($args=array()){for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}}

//Дан массив с элементами 1, 2, 3, 4, 5.
//С помощью цикла foreach найдите сумму квадратов элементов этого массива.
//Результат запишите переменную $result.

$array = [1,2,3,4,5];
$res;
foreach($array as $arg){
    $res += $arg * $arg;
}
consoleLog([$res]);