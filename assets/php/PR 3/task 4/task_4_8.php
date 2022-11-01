<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

$str = "Clyoucker";
$str[-1] = strtoupper($str[-1]);
consoleLog([$str]);

