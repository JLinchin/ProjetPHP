<<<<<<< HEAD

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
=======
<?php

class Tag
{
    private $id;
    private $libelle;
    private $isSelected;

    public function __construct($id, $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->isSelected = FALSE;
    }

    public function __get($propriete)
    {
        switch ($propriete)
        {
            case "id"         : return $this->id; break;
            case "libelle"    : return $this->libelle; break;
            case "isSelected" : return $this->isSelected; break;
        }
    }

    public function __set($propriete, $value)
    {
        switch ($propriete)
        {
            case "id"         : return $this->id = $value; break;
            case "libelle"    : return $this->libelle = $value; break;
            case "isSelected" : return $this->isSelected = $value; break;
        }
    }
}

>>>>>>> 95aa1662652ba3a1a9abd272a405f5b4b4f4bf11
?>