<?php

function consoleLog($args=array()){for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}}

//Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.

$array = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

foreach($array as $key => $value){
    consoleLog([$key . " is " . $value]);
}