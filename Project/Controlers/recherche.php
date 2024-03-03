<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    include_once "$racine/Models/bd.inc.php";

    include_once "$racine/views/entete.php";
    include_once "$racine/views/pageAcceuil.php";
    include_once "$racine/views/enpied.php";
?>