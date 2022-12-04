<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function type($value){return var_dump($value);}
    function get($path){return file_get_contents($path);}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data . !);}

    $path1 = "num_1.txt";

    //Пусть у вас есть файл, в котором записано некоторое число.
    //Откройте этот файл, возведите число в квадрат и запишите обратно в файл.

    $res = int(get($path1))*int(get($path1));
    write($path1,$res);
    read($path1);

?>