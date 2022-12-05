<?php
    function read($path){echo file_get_contents($path);}

    //Напишите код, который прочитает содержимое текстового файла:
    // /script/ index.php
    // /dir1/ /dir2/ test.txt
    $format = "txt";
    $path = "../dir1/dir2/test.$format";

    read($path);


