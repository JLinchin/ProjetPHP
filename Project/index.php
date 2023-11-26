<?php
include "getRacine.php";
include "$racine/controlers/mainControler.php";
//include_once "$racine/modele/authentification.inc.php"; // pour pouvoir utiliser isLoggedOn()

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
}

$fichier = mainControler($action);
include "$racine/controlers/$fichier";
?>