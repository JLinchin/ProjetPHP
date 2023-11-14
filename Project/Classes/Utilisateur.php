<?php

class Utilisateur
{
    private string $nom;
    private string $prenom;
    private string $login;
    private string $mdp;

    public function __construct($nom,$prenom,$login,$mdp)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->login=$login;
        $this->mdp=$mdp;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function getMdp()
    {
        return $this->mdp;
    }
}

?>