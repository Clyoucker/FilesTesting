task_1_1.php<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// </Задание 12>

$array = array(1,2,-1,-2,3,-3);

function mix($value){return $value * -1;}

$new_array = array_map('mix',$array);
consoleLog([$new_array]);

// </Задание 12>



