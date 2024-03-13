<?php

    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

    include_once "$racine/Models/bd.inc.php";
    include_once "$racine/Classes/Utilisateur.php";

    function getUser($login, $mdp)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select count(*) from User where userLog = :login and mdp = :mdp");
            $req->bindValue(":login", $login, PDO::PARAM_STR);
            $req->bindValue(":mdp", $mdp);

            $req->execute();
            $nbUser = $req->fetchColumn();
        }

        catch(PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }

        return $nbUser;
    }

    function getUserByLogin($login)
    {
        try
        {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select count(*) from User where userLog like :login");
            $req->bindValue(":login", "%" . $login . "%", PDO::PARAM_STR);

            $req->execute();
            $nbUser = $req->fetchColumn();
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
            $req->bindValue(":mdp", $mdp, PDO::PARAM_STR);

            $req->execute();
            $user = $req->fetch(PDO::FETCH_ASSOC);
            $unUser = $user ? new Utilisateur($user["nom"], $user["prenom"]) : null;
        }

        catch(PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }

        if (!is_null($unUser))
            return $unUser;

        return null;
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
        }

        catch(PDOException $e)
        {
            print "Erreur ! :" . $e->getMessage();
            die();
        }
    }