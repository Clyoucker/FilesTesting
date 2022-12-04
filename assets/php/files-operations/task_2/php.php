<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function type($value){return var_dump($value);}
    function get($path){return file_get_contents($path);}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}
    function shift($fileName,$newPath){rename($fileName, "$newPath/$fileName");}

    //Пусть в корне вашего сайта лежит файл file.txt. Пусть также в корне вашего сайта лежит папка dir. Переместите файл в эту папку.

    $format = "txt";
    $fileName = "test.$format";
    $dir = "dir1";
    shift($fileName,$dir);
?>