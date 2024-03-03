<?php
    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    include_once "$racine/Models/bd.user.inc.php";
    include_once "$racine/Classes/Utilisateur.php";
    include "$racine/views/entete.php";

    if(isset($_POST["login"]) && isset($_POST["mdp"]) && isset($_POST["nom"]) && isset($_POST["prenom"]))
    {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];

        $nbUser = getUser($login, $mdp);
        if ($nbUser == "0")
        {
            addUser(new Utilisateur($nom, $prenom), $login, $mdp);
            $_SESSION["is_co"] = true;
            include "$racine/Controlers/recherche.php";
        }
        else
        {
            include "$racine/views/inscription.php";
            include "$racine/views/enpied.php";
        }
    }
    else
    {
        include "$racine/views/inscription.php";
        include "$racine/views/enpied.php";
    }