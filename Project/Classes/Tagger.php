<?php

class Tagger{
    private $idChanson;
    private $idTag;

    public function Personne($idChanson, $idTag) {
		$this->idChanson = $idChanson;
		$this->idTag = $idTag;
	}

    public function __get($propriete) {
	switch ($propriete) {
		case 'idChanson' : return $this->idChanson; break;
		case "idTag" : return $this->idTag; break;
	    }
    }
    public function __set($propriete, $value) {
	switch ($propriete) {
		case "idChanson" : $this->idChanson = $value; break;
		case "idTag" : $this->idTag = $value; break;
	}
}
}