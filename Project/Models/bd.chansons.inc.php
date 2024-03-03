<?php

    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    include_once "$racine/Models/bd.inc.php";
    include_once "$racine/Classes/Chanson.php";

function getChansons()
{
    $lesChansons = array();
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from chanson");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne)
        {
            $uneChanson = new Chanson($ligne["id"], $ligne["nom"], $ligne["dateSortie"], $ligne["genre"], $ligne["duree"], $ligne["meilleurePlace"], $ligne["paroles"], $ligne["idAlbum"]);
            $lesChansons[] = $uneChanson;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    }

    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage();
        die();
    }

    return $lesChansons;
}


function getChansonByIdC($idC)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from chanson where id = :idC");
        $req->bindValue(':idC', $idC, PDO::PARAM_INT);

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
    $lesNoms = array();
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select id, nom from chanson where nom like :titre limit 5");
        $req ->bindValue(':titre', $titre . '%', PDO::PARAM_STR);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);

        while($ligne)
        {
            $lesNoms[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }

    return $lesNoms;
}


function addChanson($uneChanson)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("Insert Into Chanson Values(:id, :nom, :dateSortie, :genre, :duree, :meilleurePlace, :paroles, :idAlbum)");
        $req->bindValue(':id', $uneChanson->__get("id"), PDO::PARAM_INT);
        $req->bindValue(':nom', $uneChanson->__get("nom"), PDO::PARAM_STR);
        $req->bindValue(':dateSortie', $uneChanson->__get("dateSortie"), PDO::PARAM_STR);
        $req->bindValue(':genre', $uneChanson->__get("genre"), PDO::PARAM_STR);
        $req->bindValue(':duree', $uneChanson->__get("duree"), PDO::PARAM_STR);
        $req->bindValue(':meilleurePlace', $uneChanson->__get("meilleurePlace"), PDO::PARAM_STR);
        $req->bindValue(':paroles', $uneChanson->__get("paroles"), PDO::PARAM_STR);
        $req->bindValue(':idAlbum', $uneChanson->__get("idAlbum"), PDO::PARAM_INT);

        $req->execute();
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function majChanson($nouvChanson)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("Update Chanson Set nom = :nom, dateSortie = :dateSortie, genre = :genre, duree = :duree, meilleurePlace = :meilleurePlace, paroles = :paroles, idAlbum = :idAlbum Where id = :id");
        $req->bindValue(':nom', $nouvChanson->__get("nom"), PDO::PARAM_STR);
        $req->bindValue(':dateSortie', $nouvChanson->__get("dateSortie"), PDO::PARAM_STR);
        $req->bindValue(':genre', $nouvChanson->__get("genre"), PDO::PARAM_STR);
        $req->bindValue(':duree', $nouvChanson->__get("duree"), PDO::PARAM_STR);
        $req->bindValue(':meilleurePlace', $nouvChanson->__get("meilleurePlace"), PDO::PARAM_STR);
        $req->bindValue(':paroles', $nouvChanson->__get("paroles"), PDO::PARAM_STR);
        $req->bindValue(':idAlbum', $nouvChanson->__get("idAlbum"), PDO::PARAM_INT);
        $req->bindValue(':id', $nouvChanson->__get("id"), PDO::PARAM_INT);

        $req->execute();
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function delChanson($uneChanson)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("Delete From Chnason Where id = :id");
        $req->bindValue(':id', $uneChanson->__get("id"), PDO::PARAM_INT);

        $req->execute();
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}