task_1_1.php<?php

function consoleLog($args=array()){
    for ($i = 0; $i < count($args); $i++){var_dump($args[$i]);}
}

// </Задание 9>

consoleLog([rand(1,100)]);

// </Задание 9>
