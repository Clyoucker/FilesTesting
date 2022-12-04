<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo '<pre>'; echo $args[$i] ; echo '</pre>';}}
function type($value){return var_dump($value);}
function int($value){return (int)$value;}

$successfulPassword = 2569;
$password = $_GET["password"];

($password == $successfulPassword ? consoleLog(["successful"]) : consoleLog(["unSuccessful"]));
