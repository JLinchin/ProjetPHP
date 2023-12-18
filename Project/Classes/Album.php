<?php
class Album
{
	private $id;
    private $nom;
    private $lienImage;

    public function __construct($id, $nom,$lienImage) {
		$this->id = $id;
		$this->nom = $nom;
		$this->lienImage = $lienImage;
	}

    public function __get($propriete) {
	switch ($propriete) {
		case 'id' : return $this->id; break;
		case "nom" : return $this->nom; break;
        case "lienImage" : return $this->lienImage; break;
	    }
    }
    public function __set($propriete, $value) {
	switch ($propriete) {
		case "id" : $this->id = $value; break;
		case "nom" : $this->nom = $value; break;
        case "lienImage" : $this->lienImage = $value; break;
	}
}
}
?>
