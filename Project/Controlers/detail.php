<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
$racine = "..";

include_once "$racine/Models/bd.chansons.inc.php";
//include_once "$racine/Models/bd.tags.inc.php";
include_once "$racine/Models/bd.album.inc.php";

//Récupération des données GET, POST, ...
if (isset($_GET["idC"]))
    $idC = $_GET["idC"];

$uneChanson = getChansonByIdC($idC);
$lienImage  = getImageByChanson($idC);

$titre = $uneChanson->__get("nom");
include "$racine/vue/entete.php";
include "$racine/vue/pageSingle.php";
include "$racine/vue/enpied.php";
?>