<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function type($value){return var_dump($value);}
    function int($value){return (int)$value;}

    if(!isset($_COOKIE["date"])) {
        setcookie("date", date("H:i:s")); // первый заход на страницу
    } else {
        setcookie("current_date", date("H:i:s")); // последующие заходы
        $time = explode(":",$_COOKIE["date"]);
        $timeTwo = explode(":",$_COOKIE["current_date"]);
        $hours = int($time[0]); $minuts = int($time[1]); $seconds = int($time[2]);
        $hoursTwo = int($timeTwo[0]); $minutsTwo = int($timeTwo[1]); $secondsTwo = int($timeTwo[2]);
        $time = $hours * (60*60) + $minuts * 60 + $seconds; // находим секунды времени при первом заходе
        $timeTwo = $hoursTwo * (60*60) + $minutsTwo * 60 + $secondsTwo; // находим секунды текущего времени
        echo $timeTwo - $time;
    }
