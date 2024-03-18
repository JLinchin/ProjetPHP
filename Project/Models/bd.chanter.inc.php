<?php

    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
        $racine = "..";
    
    include_once "$racine/Models/bd.inc.php";
    include_once "$racine/Classes/Chanson.php";
    include_once "$racine/Classes/Chanter.php";
    include_once "$racine/Classes/Interprete.php";

    function getChanter()
    {
        $lesChanter = array();
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from chanter");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne)
            {
                $lesChanter = new Chanter($ligne["idChanson"], $ligne["idInterprete"]);
                $lesChanter[] = $lesChanter;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    
        return $lesChanter;
    }

    function getChanterByChanson($uneChanson)
    {
        $lesInterpretes = array();
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from chanter inner join interprete on idInterprete = id where idChanson = :idChanson");
            $req->bindValue(":idChanson", $uneChanson->__get["id"], PDO::PARAM_INT);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne)
            {
                $unInterprete = new Chanter($ligne["idChanson"], $ligne["idInterprete"]);
                $unInterprete[] = $unInterprete;
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

    function getInterpreteByIdC($idChanson)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from interprete inner join chanter on idInterprete = id where idChanson = :idC");
            $req->bindValue(":idC", $idChanson, PDO::PARAM_INT);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            
            $unInterprete = new Interprete($ligne["id"], $ligne["nomScene"]);
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }

        return $unInterprete;
    }

    function addChanter($uneChanson, $unInterprete)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("Insert Into chanter Values (:idChanson, :idInterprete)");
            $req->bindValue(":idChanson", $uneChanson->__get("id"), PDO::PARAM_INT);
            $req->bindValue(":idInterprete", $unInterprete->__get("id"), PDO::PARAM_INT);
            $req->execute();
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    }

    function updateChanter($nouvInterprete, $ancInterprete, $uneChanson)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("Update Chanter Set idInterprete = :nouvIdInterprete Where idInterprete = :ancIdInterprete And idChanson = :idChanson");
            $req->bindValue(":idChanson", $uneChanson->__get("id"), PDO::PARAM_INT);
            $req->bindValue(":ancIdInterprete", $ancInterprete->__get("id"), PDO::PARAM_INT);
            $req->bindValue(":nouvIdInterprete", $nouvInterprete->__get("id"), PDO::PARAM_INT);
            $req->execute();
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    }

    function delChanter($idC)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("Delete From Chanter Where idChanson = :idChanson");
            $req->bindValue(":idChanson", $idC, PDO::PARAM_INT);
            $req->execute();
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    }