<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function type($value){return var_dump($value);}
    function get($path){return file_get_contents($path);}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}
    function shift($oldPath,$newPath){rename($oldPath, "$newPath");}

    //Пусть в корне вашего сайта лежит файл.
    //С помощью цикла положите в папку copy пять копий этого файла. Именем файлов копий пусть будут их порядковые номера.

    $format = "txt";
    $fileName = "Allerts.$format";
    $dir = "copys";
    $copy = 5;

    for($i = 0; $i < $copy; $i++){
        $copyFile = "$i.$format";
        copy($fileName,"$dir/$copyFile");
    }

?>