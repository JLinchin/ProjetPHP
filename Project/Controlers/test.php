<?php

include_once "../Models/bd.inc.php";
include_once "../Models/bd.album.inc.php";

// $lesAlbums = getAlbum();
// if(!empty($lesAlbums)){
//     foreach($lesAlbums as $unAlbum){
//         echo "Id " . $unAlbum->__get("id") . "<br>";
//         echo "nom " . $unAlbum->__get("nom") . "<br>";
//         echo "lienImage " . $unAlbum->__get("lienImage") . "<br>";
// }
// }
// else{
//     echo "apagnan";
// }

// $idA = 99;
// $unAlbum = getAlbumById($idA);  
// echo "id " . $unAlbum->__get("id") . "<br>"; 
// echo "nom " . $unAlbum->__get("nom") . "<br>";
// echo "lienImage " . $unAlbum->__get("lienImage") . "<br>";

// $titre = "Thriller";
// $unAlbum = getAlbumByTitre($titre);
// echo "id " . $unAlbum->__get("id") . "<br>"; 
// echo "nom " . $unAlbum->__get("nom") . "<br>";
// echo "lienImage " . $unAlbum->__get("lienImage") . "<br>";

// $idChanson = 1;
// $unAlbum = getAlbumByIdChanson($idChanson);
// echo "id " . $unAlbum->__get("id") . "<br>"; 
// echo "nom " . $unAlbum->__get("nom") . "<br>";
// echo "lienImage " . $unAlbum->__get("lienImage") . "<br>";

// $id = 200;
// $nom = "Apagnan";
// $lien = "lien";
// addAlbum($id, $nom, $lien);

$id = 200;
deleteAlbum($id);



?>