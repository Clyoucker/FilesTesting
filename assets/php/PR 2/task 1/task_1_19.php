<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//Переменная $num может принимать одно из значений: 1, 2, 3 или 4.
//Если она имеет значение '1', то в переменную $result запишем 'зима', если имеет значение '2' – 'лето' и так далее.
//Решите задачу через switch-case.

$num = 2;
$res;

switch ($num){
    case 1: $res = "Winter"; break;
    case 2: $res = "Summer"; break;
    case 3: $res = "Autumn"; break;
    case 4: $res = "Spring"; break;
    default: $res = "Error";
}

consoleLog([$res]);
