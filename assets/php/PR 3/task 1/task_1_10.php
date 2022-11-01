task_1_1.php<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// </Задание 10>

$array = array();

while (count($array) != 10) array_push($array,rand(1,100));

consoleLog([$array]);

// </Задание 10>