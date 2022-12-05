<?php
    session_start();
    echo array_sum($_SESSION["nums"]);
?>