<?php

include_once "bd.inc.php";
include_once "../Classes/Tag.php";
include_once "../Classes/Tagger.php";
include_once "../Classes/Chanson.php";

function getTags()
{
    $lesChnasons = array();
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from tag");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne)
        {
            $unTag = new Tag($ligne["id"], $ligne["libelle"]);
            $lesTags[] = $unTag;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    }

    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage();
        die();
    }

    return $lesTags;
}


function getTagByIdT($idT)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from tag where id = :idT");
        $req->bindValue(':idT', $idT, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unTag = new Tag($ligne["id"], $ligne["libelle"]);
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }

    return $unTag;
}


function getTagByChanson($uneChanson)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Tagger inner join Tag on  idTag = id where idChanson = :uneChanson");
        $req->bindValue(':uneChanson', $uneChanson->__get("id"), PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unTag = new Tag($ligne["id"], $ligne["libelle"]);
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }

    return $unTag;
}

function AddTag($unTag,$uneChanson)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into Tagger (idTag, idChanson) Values(:unTag, :uneChanson)");
        $req->bindValue(':unTag', $unTag->__get("id"), PDO::PARAM_INT);
        $req->bindValue(':uneChanson', $uneChanson->__get("id"), PDO::PARAM_INT);

        $req->execute();

        $req->closeCursor();
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function MajTag($ancienTag,$nouveauTag,$uneChanson)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE Tagger SET idTag = :nouveauTag WHERE idTag = :ancienTag AND idChanson = :uneChanson");
        $req->bindValue(':nouveauTag', $nouveauTag->__get("id"), PDO::PARAM_INT);
        $req->bindValue(':ancienTag', $ancienTag->__get("id"), PDO::PARAM_INT);
        $req->bindValue(':uneChanson', $uneChanson->__get("id"), PDO::PARAM_INT);

        $req->execute();
        $req->closeCursor();
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function SupprimerTag($unTag,$uneChanson)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("Delete From Tagger Where idTag = :unTag and idChanson = :uneChanson");
        $req->bindValue(':unTag', $unTag->__get("id"), PDO::PARAM_INT);
        $req->bindValue(':uneChanson', $uneChanson->__get("id"), PDO::PARAM_INT);

        $req->execute();
        $req->closeCursor();
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function SupprimerTagAvecChanson($uneChanson)
{
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("Delete From Tagger Where idChanson = :uneChanson");
        $req->bindValue(':uneChanson', $uneChanson->__get("id"), PDO::PARAM_INT);

        $req->execute();
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

?>


