<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo "<pre>"; echo($args[$i]); echo "</pre>";}}
    function int($value){return (int)$value;}

    session_start();
    if (!empty($_SESSION)) {
        consoleLog(["Name: ".$_SESSION["name"],"Midle: ".$_SESSION["midle"],"Down".$_SESSION["down"]]);
    } else {echo "Error";}
