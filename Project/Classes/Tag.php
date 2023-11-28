
<?php
class Album
{
	private $id;
    private $libelle;

    public function Personne($id, $libelle) {
	$this->id = $id;
	$this->libelle = $libelle;
    }

    public function __get($propriete) {
	switch ($propriete) {
		case 'id' : return $this->prenom; break;
		case "libelle" : return $this->libelle; break;
	    }
    }
    public function __set($propriete, $value) {
	switch ($propriete) {
		case "id" : $this->id = $value; break;
		case "libelle" : $this->libelle = $value; break;
	}
}
}
?>