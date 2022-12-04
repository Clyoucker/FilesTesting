<?php

function consoleLog($args=array()){for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}}

//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'
//С помощью цикла foreach выведите эти слова в столбик.

$array = ["html","css","php","js","python","java"];

foreach($array as $arg){
    consoleLog([$arg]);
}