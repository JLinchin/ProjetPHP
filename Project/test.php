<?php
    include_once "Models\bd.chansons.inc.php";
    include_once "Classes\Chanson.php";

    $uneChanson = getChansonByIdC(3);
    echo "<br>";
    print_r($uneChanson);
    echo "</br>";