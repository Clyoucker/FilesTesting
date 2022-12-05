<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function type($value){return var_dump($value);}
    function get($path){return file_get_contents($path);}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}
    function shift($oldPath,$newPath){rename($oldPath, "$newPath");}
    function del($fileName){unlink($fileName);}

    //Положите в корень вашего сайта какую-нибудь картинку размером более мегабайта.
    //Узнайте размер этого файла и переведите его в мегабайты.

    echo (filesize('file.txt') / 1024) / 1024;
?>