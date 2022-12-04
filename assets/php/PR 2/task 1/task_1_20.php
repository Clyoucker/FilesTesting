<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//В переменной $day лежит какое-то число из интервала от 1 до 31.
//Определите в какую декаду месяца попадает это число (в первую, вторую или третью).

$day = 2;

switch ($day){
    case ($day >= 1 || $day <= 10): consoleLog(["First"]); break;
    case ($day >= 11 || $day <= 20): consoleLog(["Second"]); break;
    case ($day >= 21 || $day <= 31): consoleLog(["Third"]); break;
    default: consoleLog(["Error"]); break;
}

