<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

$arr = range(1, 10);
consoleLog([$arr]);
