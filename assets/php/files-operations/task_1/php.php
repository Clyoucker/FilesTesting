<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function type($value){return var_dump($value);}
    function get($path){return file_get_contents($path);}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}
    function shift($fileName,$newPath){rename($fileName, "$newPath/$fileName");}

    //Пусть в корне вашего сайта лежит файл old.txt. Переименуйте его на new.txt.

    $format = "txt";
    $fileName = "old.$format";
    $newFileName = "new.$format";

    rename($fileName,$newFileName);
?>