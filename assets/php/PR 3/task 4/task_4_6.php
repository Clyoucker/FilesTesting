<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

$array = range(1, 4);
$factorial = array_product($array);
consoleLog([$factorial]);

