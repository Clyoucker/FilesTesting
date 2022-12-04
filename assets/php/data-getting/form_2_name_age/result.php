<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo '<pre>'; echo $args[$i] ; echo '</pre>';}}
function type($value){return var_dump($value);}
function int($value){return (int)$value;}

$name = $_GET["name"];
$age = $_GET["age"];
consoleLog([$name,$age]);
