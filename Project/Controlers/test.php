<?php
include_once "../Models/bd.inc.php";
include_once "../Models/bd.chanter.inc.php";

$lesChanter = getChanter();
if(!empty($lesChanter)){
    foreach($lesChanter as $unChanter){
        echo "idChanson" . $unChanter->__get("idChanson"). "<br>";
        echo "idInterprete" . $unChanter->__get("idInterprete"). "<br>";
    }
}

// $unInterprete = getInterpreteById(1);
// if(!empty($unInterprete)){
//     echo "id" . $unInterprete->__get("id"). "<br>";
//     echo "nom" . $unInterprete->__get("nom"). "<br>";
//     echo "prenom" . $unInterprete->__get("prenom"). "<br>";
//     echo "nomScene" . $unInterprete->__get("nomScene"). "<br>";
// }

// $unInterprete = new interprete(200,"apaqqqq","gnan","gnan");
// delInterprete($unInterprete);

