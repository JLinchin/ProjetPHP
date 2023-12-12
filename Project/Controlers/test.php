
<?php

include_once "../Models/bd.inc.php";
include_once "../Models/bd.Tag_Tagger.php";
include_once "../Models/bd.chansons.inc.php";

//Fonction pour afficher toutes les tags
    // $tags = getTags();

    // if (!empty($tags)) {
    //     foreach ($tags as $tag) {
    //         echo "ID: " . $tag->__get("id") . "<br>";
    //         echo "Libelle: " . $tag->__get("libelle") . "<br>";
    //         echo "-------------------------<br>";
    //     }
    // } else {
    //     echo "Aucun tag trouvé";
    // }

//Afficher tout les Tags avec l'id :
    // $id = 1;
    
    // $tag = getTagByIdT($id);

    // if ($tag) {
    //     echo "ID: " . $tag->__get("id") . "<br>";
    //     echo "Libelle: " . $tag->__get("libelle") . "<br>";
    //     echo "-------------------------<br>";
    //     }
    //  else {
    //     echo "Aucun tag trouvé";
    // }

// Afficher le tag avec l'id d'une chanson :
        // $uneChanson = getChansonByIdC(1);
        // $tag = getTagByChanson($uneChanson);

        // if ($tag) {
        //         echo "ID: " . $tag->__get("id") . "<br>";
        //         echo "Libelle: " . $tag->__get("libelle") . "<br>";
        //         echo "-------------------------<br>";
        //         }
        //      else {
        //         echo "Aucun tag trouvé";
        //      }

// Ajouter un nouveau Tag : 

    $unTag = getTagByIdT(1);
    $uneChanson = getChansonByIdC(3);
    $nouveauTag = getTagByIdT(3);

    //AddTag($unTag, $uneChanson);
    MajTag($unTag, $nouveauTag, $uneChanson);
    //SupprimerTag($unTag, $uneChanson);
?>
