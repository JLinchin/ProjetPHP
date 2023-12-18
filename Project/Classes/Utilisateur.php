<?php

class Utilisateur
{
    private string $nom;
    private string $prenom;

    public function __construct($nom,$prenom)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function __set($param, $value)
    {
        switch ($param)
        {
            case "nom":
                $this->nom = $value;
                break;

            case "prenom":
                $this->prenom = $value;
                break;
        }
    }
}

?>