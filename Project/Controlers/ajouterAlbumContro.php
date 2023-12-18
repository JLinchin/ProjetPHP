<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
$racine = "..";

include_once "$racine/Models/bd.Album.inc.php";



    try {
        

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


include "$racine/views/entete.php";
include "$racine/views/ajouterAlbum.php";
include "$racine/views/enpied.php";
?>