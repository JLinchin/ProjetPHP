<?php
    class Interprete
    {
        private $id;
        private $nom;
        private $prenom;
        private $nomScene;

        public function __construct($id, $nom, $prenom, $nomScene)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->nomScene = $nomScene;
        }

        public function __get($propriete)
        {
            switch($propriete)
            {
                case "id": return $this->id; break;
                case "nom": return $this->nom; break;
                case"prenom": return $this->prenom; break;
                case "nomScene": return $this->nomScene; break;
            }
        }

        public function __set($propriete, $value)
        {
            switch($propriete)
            {
                case "id": $this->id = $value; break;
                case "nom": $this->nom = $value; break;
                case"prenom": $this->prenom = $value; break;
                case "nomScene": $this->nomScene = $value; break;
            }
        }
    }