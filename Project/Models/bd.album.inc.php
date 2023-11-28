<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

include_once "bd.inc.php";
include_once "../Classes/Album.php";

function getAlbum(){
    $lesAlbums = array();
    try
    {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from album");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne)
        {
            $unAlbum = new Album($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
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

function getAlbumById($idA){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from album where id = :idA");
        $req = bindValue(':idA', $idA, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unAlbum = new Album($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $unAlbum;
}

function getAlbumByTitre($titre){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from album where nom = :titre");
        $req = bindValue(':titre', $titre, PDO::PARAM_STR);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unAlbum = new Album($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
    }

    catch (PDOException $e)
    {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $unAlbum;
}

function getAlbumByIdChanson($idChanson){
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from album inner join chanson on id = idAlbum where id = :idChanson");
        $req = bindValue(':idChanson', $idChanson, PDO::PARAM_INT);

        $req->execute();
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unAlbum = new Album($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
    }
    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage();
        die();
    }
    return $unAlbum;
}

function getAlbumByTitreChanson($titreC){
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT Album.*
                                FROM Album
                                JOIN Chanson ON Album.id = Chanson.idAlbum
                                WHERE Chanson.nom = :titre");
        $req = bindValue(':titreC', $titreC, PDO::PARAM_STR);

        $req->execute();
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $unAlbum = new Album($ligne["id"], $ligne["nom"], $ligne["lienImage"]);
    }
    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage();
        die();
    }
    return $unAlbum;
}

function addAlbum($id, $nom, $lien){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into Album(id, nom, lienImage) values(:id, :nom, :lien)");
        $req = bindValue(':id', $id, PDO::PARAM_INT);
        $req = bindValue(':nom', $nom, PDO::PARAM_STR);
        $req = bindValue(':lien', $lien, PDO::PARAM_STR);

        $req->execute();
    }
    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage();
        die();
    }
}

function setAlbum($id, $nouveauNom, $nouveauLien)
{
    try {
        $cnx = connexionPDO(); 

        $req = $cnx->prepare("UPDATE Album SET nom = :nouveauNom, lienImage = :nouveauLien WHERE id = :id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->bindValue(':nouveauNom', $nouveauNom, PDO::PARAM_STR);
        $req->bindValue(':nouveauLien', $nouveauLien, PDO::PARAM_STR);

        $req->execute();
    } catch (PDOException $e) {
        print "Erreur ! :" . $e->getMessage();
        die();
    }
}

function deleteAlbum($id)
{
    try {
        $cnx = connexionPDO(); 

        $req = $cnx->prepare("DELETE FROM Album WHERE id = :id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);

        $req->execute();
    } catch (PDOException $e) {
        print "Erreur ! :" . $e->getMessage();
        die();
    }
}