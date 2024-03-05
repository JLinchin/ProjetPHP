<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

include_once "$racine/Models/bd.chansons.inc.php";
include_once "$racine/Models/bd.interprete.inc.php";
include_once "$racine/Models/bd.album.inc.php";

$lesAlbums = getAlbum();
if (isset($_POST['Interprete']) && isset($_POST['Single']) && isset($_POST['Duree']) && isset($_POST['Album']) && isset($_POST['DateSortie']) && isset($_POST['Genre']) && isset($_POST['MeilleurePlace']) && isset($_POST['Parole'])) {
    $nomInterprete = $_POST['Interprete'];
    $single = $_POST['Single'];
    $duree = $_POST['Duree'];
    $album = $_POST['Album'];
    $dateSortie = $_POST['DateSortie'];
    $genre = $_POST['Genre'];
    $meilleurePlace = $_POST['MeilleurePlace'];
    $parole = $_POST['Parole'];

    if (getInterpretesByNom($nomInterprete) == 0)
    {
        $uninterprete = new Interprete(0, "", "", $nomInterprete);
        addInterprete($uninterprete);
    }
    try { 
        $uneChanson = new chanson(0, $single, $dateSortie, $genre, $duree, $meilleurePlace, $parole, $album);
        addChanson($uneChanson);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

include "$racine/views/entete.php";
include "$racine/views/ajouterChanson.php";
include "$racine/views/enpied.php";
?>