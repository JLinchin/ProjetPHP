<?php

function mainControler($action) {
    $actions = array();
    $actions["defaut"]      = "detail.php";
    $actions["accueil"]     = "recherche.php";
    $actions["detail"]      = "detail.php";
    $actions["ajoutC"]       = "ajouterChansonContro.php";
    $actions["ajoutA"]       = "ajouterAlbumContro.php";
    $actions["modif"]       = "ajout.php";
    $actions["pageSingle"] = "pageSingle.php";
    $actions["connexion"]   = "connexionContro.php";
    $actions["deconnexion"] = "deconnexion.php";

    if (array_key_exists($action, $actions)) {
        return $actions[$action];
    } 
    else {
        return $actions["defaut"];
    }
}

?>