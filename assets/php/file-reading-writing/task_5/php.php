<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function type($value){return var_dump($value);}
    function get($path){return file_get_contents($path);}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}

    $path1 = "num_1.txt";
    //Пусть в корне вашего сайта лежит файл count.txt.
    //Изначально в нем записано число 0.
    //Сделайте так, чтобы при обновлении страницы наш скрипт каждый раз увеличивал это число на 1.
    //То есть у нас получится счетчик обновления страницы в виде файла.

    $res = get($path1);
    write($path1,$res+1);
    $fileRes = get($path1);
    echo "updates: $fileRes";

?>