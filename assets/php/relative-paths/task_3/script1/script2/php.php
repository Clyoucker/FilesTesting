<?php
    function read($path){echo file_get_contents($path);}

    //Напишите код, который прочитает содержимое текстового файла:
    // script1 / script2 / php.php
    // /dir1/ test.txt
    $format = "txt";
    $path = "../../dir1/test.$format";

    read($path);


