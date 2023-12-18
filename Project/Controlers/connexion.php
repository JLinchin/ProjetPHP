<?php
    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    include_once "$racine/Models/bd.user.inc.php";
    include "$racine/views/entete.php";

    if(isset($_POST["login"]) && isset($_POST["mdp"]))
    {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];

        if (getUser($login, $mdp) > 0)
        {
            $unUser = getNomPrenUser($login, $mdp);
            include "$racine/views/recherche.php";
        }
        else
            include "$racine/views/connexion.php";
    }
    else
        include "$racine/views/connexion.php";

    include "$racine/views/enpied.php";