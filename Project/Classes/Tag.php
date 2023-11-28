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

?>