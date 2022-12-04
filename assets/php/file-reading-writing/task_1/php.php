<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function read($path){return file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}

    $path1 = "num_1.txt";
    $path2 = "num_2.txt";

    $value1 = int(read($path1));
    $value2 = int(read($path2));

    consoleLog([$value1 + $value2]);

?>