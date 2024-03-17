<?php

function mainControler($action) {
    $actions = array();
    $actions["defaut"]      = "recherche.php";
    $actions["accueil"]     = "recherche.php";
    $actions["detail"]      = "detail.php";
    $actions["ajoutC"]      = "ajouterChansonContro.php";
    $actions["ajoutA"]      = "ajouterAlbumContro.php";
    $actions["modif"]       = "ajouterChansonContro.php";
    $actions["connexion"]   = "connexion.php";
    $actions["deconnexion"] = "deconnexion.php";
    $actions["inscription"] = "inscription.php";

    if (array_key_exists($action, $actions)) {
        return $actions[$action];
    } 
    else {
        return $actions["defaut"];
    }
}

?>