<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

include_once "bd.inc.php";
include_once "$racine/classes/Chanson.php";

function getChansons()
{
    $lesChnasons = array();
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from chanson");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne)
        {
            $uneChanson = new Chanson($ligne["id"], $ligne["nom"], $ligne["dateSortie"], $ligne["genre"], $ligne["duree"], $ligne["meilleurePlace"], $ligne["paroles"], $ligne["idAlbum"]);
            $lesChnasons[] = $uneChanson;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    }

    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage();
        die();
    }

    return $lesChnasons;
}


function getChansonByIdC($idC)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from chanson where id = :idC");
        $req = bindValue(':idC', $idC, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $uneChanson = new Chanson($ligne["id"], $ligne["nom"], $ligne["dateSortie"], $ligne["genre"], $ligne["duree"], $ligne["meilleurePlace"], $ligne["paroles"], $ligne["idAlbum"]);
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }

    return $uneChanson;
}


function getChansonByTitre($titre)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from chanson where nom = :titre");
        $req = bindValue(':titre', $titre, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $uneChanson = new Chanson($ligne["id"], $ligne["nom"], $ligne["dateSortie"], $ligne["genre"], $ligne["duree"], $ligne["meilleurePlace"], $ligne["paroles"], $ligne["idAlbum"]);
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }

    return $uneChanson;
}

?>