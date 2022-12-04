<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}
//В переменной $month лежит какое-то число из интервала от 1 до 12.
//Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).

$month = 6;

switch ($day){
    case ($day == 1 || $day == 2 || $day == 12): consoleLog(["Winter"]); break;
    case ($day >= 3 || $day <= 5): consoleLog(["Spring"]); break;
    case ($day >= 6 || $day <= 8): consoleLog(["Summer"]); break;
    case ($day >= 9 || $day <= 11): consoleLog(["Autumn"]); break;
    default: consoleLog(["Error"]); break;
}

