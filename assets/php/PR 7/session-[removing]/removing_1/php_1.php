<?php
    function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
    function type($value){return var_dump($value);}
    function int($value){return (int)$value;}

	session_start();

	if (!isset($_SESSION["counter"])) {
        $_SESSION["counter"] = 1;
    } else {
        ($_SESSION["counter"] >= 10 ? $_SESSION["counter"] = 0 : $_SESSION["counter"]++);
        echo type($_SESSION["counter"]);
    }

	echo $_SESSION["counter"];
?>