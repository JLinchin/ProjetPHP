<?php
    class Interprete
    {
        private $id;
        private $nomScene;

        public function __construct($id, $nomScene)
        {
            $this->id = $id;
            $this->nomScene = $nomScene;
        }

        public function __get($propriete)
        {
            switch($propriete)
            {
                case "id": return $this->id; break;
                case "nomScene": return $this->nomScene; break;
            }
        }

        public function __set($propriete, $value)
        {
            switch($propriete)
            {
                case "id": $this->id = $value; break;
                case "nomScene": $this->nomScene = $value; break;
            }
        }
    }