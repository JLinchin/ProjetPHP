<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

include_once "$racine/models/bd.chansons.inc.php";
//include_once "$racine/models/bd.tags.inc.php";
//include_once "$racine/models/bd.images.inc.php";

//Récupération des données GET, POST, ...
$idC = $_GET["idC"];

$uneChanson = getChansonByIdC($idC);
//$uneImage = getImageByIdC($idC);

$titre = $uneChanson->__get("nom");
include "$racine/vue/entete.php";
include "$racine/vue/pageSingle.php";
include "$racine/vue/enpied.php";
?>