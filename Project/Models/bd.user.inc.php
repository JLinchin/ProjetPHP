<?php

    include_once "bd.inc.php";
    include_once "Classes/Utilisateur.php";

    function getUser($login, $mdp)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select count(*) from User where userLog = :login and mdp = :mdp");
            $req->bindValue(":login", $login, PDO::PARAM_STR);
            $req->bindValue(":mdp", hash("sha256", $mdp), PDO::PARAM_STR);

            $req->execute();
            $nbUser = $req->fetch(PDO::FETCH_ASSOC);
        }

        catch(PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }

        return $nbUser;
    }

    function getNomPrenUser($login, $mdp)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select nom, prenom from User where userLog = :login and mdp = :mdp");
            $req->bindValue(":login", $login, PDO::PARAM_STR);
            $req->bindValue(":mdp", hash("sha256", $mdp), PDO::PARAM_STR);

            $req->execute();
            $user = $req->fetch(PDO::FETCH_ASSOC);
            $unUser = new Utilisateur($user["nom"], $user["prenom"]);
        }

        catch(PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }

        return $unUser;
    }

    function addUser($unUser, $login, $hashedMdp)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("insert into User (userLog, mdp, nom, prenom) values(:login,:mdp, :nom, :prenom)");
            $req->bindValue(":login", $login, PDO::PARAM_STR);
            $req->bindValue(":mdp", $hashedMdp, PDO::PARAM_STR);
            $req->bindValue(":nom", $unUser->getNom(), PDO::PARAM_STR);
            $req->bindValue(":prenom", $unUser->getPrenom(), PDO::PARAM_STR);

            $req->execute();
            $user = $req->fetch(PDO::FETCH_ASSOC);
            $unUser = new Utilisateur($user["nom"], $user["prenom"]);
        }

        catch(PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }

        return $unUser;
    }