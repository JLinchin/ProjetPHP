<?php

use function PHPSTORM_META\type;

    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    include_once "$racine/Models/bd.user.inc.php";
    include "$racine/views/entete.php";

    if(isset($_POST["login"]) && isset($_POST["mdp"]))
    {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];

        $nbUser = getUser($login, $mdp);
        if ($nbUser != "0")
        {
            $unUser = getNomPrenUser($login, $mdp);

            $_SESSION["is_co"] = TRUE;
            $_SESSION["nom"] = $unUser->getNom();
            $_SESSION["prenom"] = $unUser->getPrenom();
            
            include "$racine/Controlers/recherche.php";
        }
        else
        {
            include "$racine/views/connexion.php";
            include "$racine/views/enpied.php";
        }
    }
    else
    {
        include "$racine/views/connexion.php";
        include "$racine/views/enpied.php";
    }