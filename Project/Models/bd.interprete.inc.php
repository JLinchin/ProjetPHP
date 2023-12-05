<?php

    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    include_once "bd.inc.php";
    include_once "$racine/classes/Interprete.php";

    function getInterpretes()
    {
        $lesInterpretes = array();
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from interprete");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne)
            {
                $unInterprete = new Interprete($ligne["id"], $ligne["nom"], $ligne["prenom"], $ligne["nomScene"]);
                $lesInterpretes[] = $unInterprete;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    
        return $lesInterpretes;
    }

    function getInterpreteById($idInterp)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from interprete where id = :id");
            $req->bindValue(':id', $idInterp, PDO::PARAM_INT);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            $unInterprete = new Interprete($ligne["id"], $ligne["nom"], $ligne["prenom"], $ligne["nomScene"]);
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }

        return $unInterprete;
    }

    function addInterprete($unInterprete)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("Insert Into Interprete Values (:id, :nom, :prenom, :nomScene)");
            $req->bindValue(':id', $unInterprete->__get("id"), PDO::PARAM_INT);
            $req->bindValue(':nom', $unInterprete->__get("nom"), PDO::PARAM_STR);
            $req->bindValue(':prenom', $unInterprete->__get("prenom"), PDO::PARAM_STR);
            $req->bindValue(':nomScene', $unInterprete->__get("nomScene"), PDO::PARAM_STR);
            $req->execute();
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    }

    function majInterprete($nouvInterprete)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("Update Interprete Set nom = :nom, prenom = :prenom, nomScene = :nomScene Where id = :id");
            $req->bindValue(':nom', $nouvInterprete->__get("nom"), PDO::PARAM_STR);
            $req->bindValue(':prenom', $nouvInterprete->__get("prenom"), PDO::PARAM_STR);
            $req->bindValue(':nomScene', $nouvInterprete->__get("nomScene"), PDO::PARAM_STR);
            $req->bindValue(':id', $nouvInterprete->__get("id"), PDO::PARAM_INT);
            $req->execute();
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    }

    function delInterprete($unInterprete)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("Delete From Interprete where id = :id");
            $req->bindValue(':id', $unInterprete->__get("id"), PDO::PARAM_INT);
            $req->execute();
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    }