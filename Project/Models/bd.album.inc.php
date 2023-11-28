<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

include_once "bd.inc.php";
include_once "$racine/Classes/Album.php";

public function getAlbum(){
    $lesAlbums = array();
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from album");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne)
        {
            $unAlbum = new Chanson($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
            $lesAlbums[] = $unAlbum;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage();
        die();
    }

    return $lesAlbums;
}

public function getAlbumById($idA){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from album where id = :idA");
        $req = bindValue(':idA', $idA, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unAlbum = new Chanson($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $unAlbum;
}

public function getAlbumByTitre($titre){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from album where nom = :titre");
        $req = bindValue(':titre', $titre, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unAlbum = new Chanson($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $unAlbum;
}

public function getAlbumByIdChanson($idChanson){
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from album inner join chanson on id = idAlbum where id = :idChanson");
        $req = bindValue(':idChanson', $idChanson, PDO::PARAM_INT);

        $req->execute();
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unAlbum = new Chanson($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
    }
    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage();
        die();
    }
    return $unAlbum;
}

public function getAlbumByTitreChanson($titreC){
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT Album.*
                                FROM Album
                                JOIN Chanson ON Album.id = Chanson.idAlbum
                                WHERE Chanson.nom = :titre");
        $req = bindValue(':titreC', $titreC, PDO::PARAM_INT);

        $req->execute();
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unAlbum = new Chanson($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
    }
    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage();
        die();
    }
    return $unAlbum;
}

