<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function type($value){return var_dump($value);}
    function get($path){return file_get_contents($path);}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}

    //Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt.
    //Вручную сделайте массив с именами этих файлов.
    //Переберите его циклом, прочитайте содержимое каждого из файлов, слейте его в одну строку и запишите в новый файл new.txt.
    //Изначально этого файла не должно быть.

    $fileName = "new.txt";
    $arr = [1,2,3];
    $res = null;

    foreach($arr as $arg){$res .= " " . get("$arg.txt");}
    write($fileName,$res);
    read($fileName);

?>