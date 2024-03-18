<?php

    $racine = "..";

    include_once "$racine/Models/bd.inc.php";
    include_once "$racine/Models/bd.chansons.inc.php";
    include_once "$racine/Models/bd.chanter.inc.php";

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

    function suppTitre($idC)
    {
        delChanson($idC);
        delChanter($idC);

        $result = ["true"];

        header('Content-Type: application/json');
        echo json_encode(array_map(function ($item)
        {
            return
            [
                'res' => "true"
            ];
        }, $result));
    }



    if ($_GET["action"] == "search")
        $res = getTitres($_GET["nom"]);
    else
        $res = suppTitre($_GET["id"]);