<?php

    include_once "bd.inc.php";
    include_once "../Classes/Chanson.php";
    include_once "../Classes/Chanter.php";
    include_once "../Classes/Interprete.php";

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

    function addChanter($uneChanson, $unInterprete)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("Insert Into chanter Values (:idChanson, :idInterprete)");
            $req->bindValue(":idChanson", $uneChanson->__get("id"), PDO::PARAM_INT);
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

    function delChanter($uneChanson, $unInterprete)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("Delete From Chanter Where idInterprete = :IdInterprete And idChanson = :idChanson");
            $req->bindValue(":idChanson", $uneChanson->__get("id"), PDO::PARAM_INT);
            $req->bindValue(":IdInterprete", $unInterprete->__get("id"), PDO::PARAM_INT);
            $req->execute();
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    }