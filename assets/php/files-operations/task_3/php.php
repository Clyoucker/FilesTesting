<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function type($value){return var_dump($value);}
    function get($path){return file_get_contents($path);}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}
    function shift($oldPath,$newPath){rename($oldPath, "$newPath");}

    //Пусть в корне вашего сайта лежит папка dir1, а в ней файл file.txt. Пусть также в корне вашего сайта лежит папка dir2. Переместите файл в эту папку.

    $format = "txt";
    $fileName = "file.$format";
    $oldPath = "dir1/$fileName";
    $newPath = "dir2/$fileName";
    shift($oldPath,$newPath);

?>