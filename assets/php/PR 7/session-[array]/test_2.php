<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function li($arg) {return "<li>$arg</li>";}
    session_start();
    if (!empty($_SESSION)) {
        consoleLog(["<ul>"]);
        consoleLog([li($_SESSION["user"]["name"]),li($_SESSION["user"]["age"]),li($_SESSION["user"]["selary"]),li($_SESSION["user"]["desc"])]);
        consoleLog(["</ul>"]);
    } else {echo "Error";}
