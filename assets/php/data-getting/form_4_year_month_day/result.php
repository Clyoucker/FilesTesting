<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo '<pre>'; echo $args[$i] ; echo '</pre>';}}
function type($value){return var_dump($value);}
function int($value){return (int)$value;}

$year = $_GET["year"];
$month = $_GET["month"];
$day = $_GET["day"];

$userDate = $year."-".$month."-".$day;
$date = new DateTime($userDate);
$week = $date->format("w");

switch ($week){
    case ($week == 1): consoleLog(["Monday"]); break;
    case ($week == 2): consoleLog(["Tuesday"]); break;
    case ($week == 3): consoleLog(["Wednesday"]); break;
    case ($week == 4): consoleLog(["Thursday"]); break;
    case ($week == 5): consoleLog(["Friday"]); break;
    case ($week == 6): consoleLog(["Saturday"]); break;
    case ($week == 0): consoleLog(["Sunday"]); break;
}

