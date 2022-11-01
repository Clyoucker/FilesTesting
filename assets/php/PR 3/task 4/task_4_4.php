<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Заполните массив 10-ю иксами не используя цикл

$array = array_fill(0,10,"x");
consoleLog([$array]);

