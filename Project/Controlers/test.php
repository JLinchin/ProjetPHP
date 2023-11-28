<?php
include_once "../Classes/Album.php";
include_once "../Models/bd.inc.php";
include_once "../Models/bd.album.inc.php";

$unAlbum = new Album();

$lesAlbums = $unAlbum->getAlbum();

// Affichez les albums
if (!empty($lesAlbums)) {
    foreach ($lesAlbums as $album) {
        echo "ID: " . $album->id . ", Nom: " . $album->nom . ", Image: " . $album->lienImage . "<br>";
    }
} else {
    echo "Aucun album trouvé.";
}
?>