<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function type($value){return var_dump($value);}
    function get($path){return file_get_contents($path);}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}
    function shift($oldPath,$newPath){rename($oldPath, "$newPath");}
    function del($fileName){unlink($fileName);}

    //Модифицируйте предыдущую задачу так, чтобы размер файла выводился в килобайтах.

    echo filesize('file.txt') / 1024;
?>