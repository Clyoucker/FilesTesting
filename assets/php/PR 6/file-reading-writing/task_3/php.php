<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function int($value){return (int)$value;}
    function read($path){echo file_get_contents($path);}
    function write($path,$data){file_put_contents($path, $data);}

    $path1 = "num_1.txt";

    //Дан массив с числами. Найдите сумму этих чисел и результат запишите в файл sum.txt.

    $array = [1,2,3,4,5]; $res = 0;
    foreach($array as $arg){$res += $arg;}

    write($path1,$res);
    read($path1);

?>