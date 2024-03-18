<?php

use function PHPSTORM_META\type;

    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    include_once "$racine/Models/bd.user.inc.php";
    include "$racine/views/entete.php";

    if(isset($_POST["login"]) && isset($_POST["mdp"]))
    {
        $login = $_POST["login"];
        $mdp = hash('sha256', $_POST["mdp"]);

        $nbUser = getUser($login, $mdp);
        if ($nbUser != "0")
        {
            $unUser = getNomPrenUser($login, $mdp);

            $_SESSION["is_co"] = TRUE;
            $_SESSION["nom"] = $unUser->getNom();
            $_SESSION["prenom"] = $unUser->getPrenom();
            
            echo '<script>location.replace("http://localhost/PHPChansons/Master/Project");</script>';
        }
        else
        {
            echo "<script>alert('Les identifiants de connexion sont erronés !')</script>";
            include "$racine/views/connexion.php";
            include "$racine/views/enpied.php";
        }
    }
    else
    {
        include "$racine/views/connexion.php";
        include "$racine/views/enpied.php";
    }