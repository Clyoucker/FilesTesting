<?php
    function read($path){echo file_get_contents($path);}

    //Напишите код, который прочитает содержимое текстового файла:
    // script1 / script2 / script3 / php.php
    // dir1 / dir2 / dir3 / test.txt
    $format = "txt";
    $dir = "dir1/dir2/dir3";
    $script = "../../..";
    $path = "$script/$dir/test.$format";

    read($path);


