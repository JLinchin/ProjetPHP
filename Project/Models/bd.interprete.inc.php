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
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            $unInterprete = new Interprete($ligne["id"], $ligne["nom"], $ligne["prenom"], $ligne["nomScene"]);
        }

        catch (PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }

        return $unInterprete
    }