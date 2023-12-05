<?php

class Chanson{
    private $id;
    private $nom;
    private $dateSortie;
    private $genre;
    private $duree;
    private $meilleurePlace;
    private $paroles;
    private $idAlbum;

    public function __construct($id, $nom, $dateSortie, $genre, $duree, $meilleurePlace, $paroles, $idAlbum) 
    {
	    $this->id = $id;
	    $this->nom = $nom;
        $this->dateSortie = $dateSortie;
        $this->genre = $genre;
        $this->duree = $duree;
        $this->meilleurePlace = $meilleurePlace;
        $this->paroles = $paroles;
        $this->idAlbum = $idAlbum;
    }

    public function __get($propriete) {
        switch ($propriete) {
            case "id" : return $this->id; break;
            case "nom" : return $this->nom; break;
            case "dateSortie" : return $this->dateSortie; break;
            case "genre" : return $this->genre; break;
            case "duree" : return $this->duree; break;
            case "meilleurPlace" : return $this->meilleurePlace; break;
            case "paroles" : return $this->paroles; break;
            case "idAlbum" : return $this->idAlbum; break;
        }
    }

    public function __set($propriete, $value) {
        switch ($propriete) {
            case "id" : $this->id = $value; break;
            case "nom" : return $this->nom = $value;break;
            case "dateSortie" : $this->dateSortie= $value;break;
            case "genre" : $this->genre = $value;break;
            case "duree" : $this->duree = $value; break;
            case "meilleurPlace" : $this->meilleurePlace = $value;break;
            case "paroles" : $this->paroles = $value; break;
            case "idAlbum" : $this->idAlbum = $value;break;
        }
    }

}
?>