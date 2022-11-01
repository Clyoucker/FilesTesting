<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

$array = range(1,16);
$new_array = array_map("sqrt",$array);
consoleLog($new_array);

