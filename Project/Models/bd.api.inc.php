<?php

    $racine = "..";

    include_once "$racine/Models/bd.inc.php";
    include_once "$racine/Models/bd.chansons.inc.php";

    function getTitres($nom)
    {
        $lesChansons = getChansonByTitre($nom);
        header('Content-Type: application/json');
        echo json_encode(array_map(function ($item)
        {
            return
            [
                'id' => $item["id"],
                'nom' => $item["nom"]
            ];
        }, $lesChansons));
    }



    $res = getTitres($_GET["nom"]);