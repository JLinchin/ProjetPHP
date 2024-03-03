<?php
    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    $_SESSION["is_co"] = false;

    include "$racine/views/entete.php";
    include "$racine/Controlers/recherche.php";
    include "$racine/views/enpied.php";