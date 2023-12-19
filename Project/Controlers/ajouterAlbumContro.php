<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
$racine = "..";

include_once "$racine/Models/bd.Album.inc.php";

if (isset($_POST['Nom']) && ($_POST['Image']))
{
    $nom = $_POST['Nom'];
    $image = $_POST['Image'];



    try {
        addAlbum($nom, $image);
        

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

include "$racine/views/entete.php";
include "$racine/views/ajouterAlbum.php";
include "$racine/views/enpied.php";
?>