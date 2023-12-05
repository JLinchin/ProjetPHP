
<?php

include_once "../Models/bd.inc.php";
include_once "../Models/bd.chansons.inc.php";

// Fonction pour afficher toutes les chansons
    // $chansons = getChansons();

    // if (!empty($chansons)) {
    //     foreach ($chansons as $chanson) {
    //         echo "ID: " . $chanson->__get("id") . "<br>";
    //         echo "Nom: " . $chanson->__get("nom") . "<br>";
    //         echo "Date de sortie: " . $chanson->__get("dateSortie") . "<br>";
    //         echo "Genre: " . $chanson->__get("genre") . "<br>";
    //         echo "Durée: " . $chanson->__get("duree") . "<br>";
    //         echo "Meilleure place: " . $chanson->__get("meilleurPlace") . "<br>";
    //         echo "Paroles: " . $chanson->__get("paroles") . "<br>";
    //         echo "ID de l'album: " . $chanson->__get("idAlbum") . "<br>";
    //         echo "-------------------------<br>";
    //     }
    // } else {
    //     echo "Aucune chanson trouvée.";
    // }

    // Fonction pour afficher une chanson par ID
    // $id = 50;
    // $chanson = getChansonByIdC($id);

    // if ($chanson) {
    //     echo "ID: " . $chanson->__get("id") . "<br>";
    //     echo "Nom: " . $chanson->__get("nom") . "<br>";
    //     echo "Date de sortie: " . $chanson->__get("dateSortie") . "<br>";
    //     echo "Genre: " . $chanson->__get("genre") . "<br>";
    //     echo "Durée: " . $chanson->__get("duree") . "<br>";
    //     echo "Meilleure place: " . $chanson->__get("meilleurPlace") . "<br>";
    //     echo "Paroles: " . $chanson->__get("paroles") . "<br>";
    //     echo "ID de l'album: " . $chanson->__get("idAlbum") . "<br>";
    //     echo "-------------------------<br>";
    // } else {
    //     echo "Aucune chanson trouvée avec l'ID spécifié.";
    // }

    // Fonction pour afficher une chanson par titre
    $titre = 'Au bout de mes rêves';
    $chanson = getChansonByTitre($titre);

    if ($chanson) {
        echo "ID: " . $chanson->__get("id") . "<br>";
        echo "Nom: " . $chanson->__get("nom") . "<br>";
        echo "Date de sortie: " . $chanson->__get("dateSortie") . "<br>";
        echo "Genre: " . $chanson->__get("genre") . "<br>";
        echo "Durée: " . $chanson->__get("duree") . "<br>";
        echo "Meilleure place: " . $chanson->__get("meilleurPlace") . "<br>";
        echo "Paroles: " . $chanson->__get("paroles") . "<br>";
        echo "ID de l'album: " . $chanson->__get("idAlbum") . "<br>";
        echo "-------------------------<br>";
    } else {
        echo "Aucune chanson trouvée avec le titre spécifié.";
    }

?>
