<?php

function consoleLog($args = array()) {for ($i = 0; $i < count($args); $i++) {echo($args[$i]);}}
function type($value){return var_dump($value);}
function int($value){return (int)$value;}

$form = int($_GET["one"]) + int($_GET["two"]) + int($_GET["three"]);
consoleLog([$form]);
