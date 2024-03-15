<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    include_once "$racine/Models/bd.chansons.inc.php";
    include_once "$racine/Models/bd.album.inc.php";

    $chansons = getChansonsRandom();

    include_once "$racine/views/entete.php";
    include_once "$racine/views/pageAcceuil.php";
    include_once "$racine/views/enpied.php";
?>