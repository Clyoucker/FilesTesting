<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function type($value){return var_dump($value);}
    function int($value){return (int)$value;}

    session_start();
    $date = date("H:i:s");

    if(!isset($_SESSION["date"])) {
        $_SESSION["date"] = date("H:i:s");; // первый заход на страницу
        consoleLog(["date: ".$_SESSION["date"]]);
    } else {
        $_SESSION["current_date"] = $date;   // последующие заходы
        $time = explode(":",$_SESSION["date"]); // получаем список из элементов времени при первом заходе
        $timeTwo = explode(":",$_SESSION["current_date"]); // получаем список из элементов текущего времени
        $hours = int($time[0]); $minuts = int($time[1]); $seconds = int($time[2]);
        $hoursTwo = int($timeTwo[0]); $minutsTwo = int($timeTwo[1]); $secondsTwo = int($timeTwo[2]);
        $time = $hours * (60*60) + $minuts * 60 + $seconds; // находим секунды времени при первом заходе
        $timeTwo = $hoursTwo * (60*60) + $minutsTwo * 60 + $secondsTwo; // находим секунды текущего времени
        echo $timeTwo - $time;
    }
