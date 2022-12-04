<?php

function consoleLog($args=array()){for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}}

//Дан массив с элементами 1, 2, 3, 4, 5.
//С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.

$array = [1,2,3,4,5];
$res;
foreach($array as $arg){$res += $arg;}
consoleLog([$res]);