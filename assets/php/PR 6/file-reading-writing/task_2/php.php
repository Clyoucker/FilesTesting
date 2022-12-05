<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}

    $path1 = "num_1.txt";

    write($path1,"45");
    read($path1);

?>