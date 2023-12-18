<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
$racine = "..";

include_once "$racine/Models/bd.chansons.inc.php";
include_once "$racine/Models/bd.interprete.inc.php";

if (isset($_POST['Interprete']) && ($_POST['Single']) && ($_POST['Duree']) && ($_POST['Album']) && ($_POST['DateSortie']) && ($_POST['Genre']) && ($_POST['MeilleurePlace']) && ($_POST['Parole'])) {
    $nomInterprete = $_POST['Interprete'];
    $single = $_POST['Single'];
    $duree = $_POST['duree'];
    $album = $_POST['Album'];
    $dateSortie = $_POST['DateSortie'];
    $genre = $_POST['Genre'];
    $meilleurePlace = $_POST['MeilleurePlace'];
    $parole = $_POST['Parole'];

    if (getInterpretesByNom($nomInterprete) == 0)
    {
        $uninterprete = new Interprete(0,$nomInterprete);
        addInterprete($uninterprete);
    }

    try {
        $uneChanson = new chanson(0,$single,$dateSortie,$genre,$duree,$meilleurePlace,$parole,$album);
        addChanson($uneChanson);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

include "$racine/views/entete.php";
include "$racine/views/ajouterChanson.php";
include "$racine/views/enpied.php";
?>