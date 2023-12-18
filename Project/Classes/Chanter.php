<?php
    class Chanter 
    {
        private $idChanson;
        private $idInterprete;

        public function __construct($idChanson, $idInterprete)
        {
            $this->idChanson    = $idChanson;
            $this->idInterprete = $idInterprete;
        }

        public function __get($propriete)
        {
            switch ($propriete)
            {
                case "idChanson": return $this->idChanson; break;
                case "idInterprete": return $this->idInterprete; break;
            }
        }

        public function __set($propriete, $value)
        {
            switch ($propriete)
            {
                case "idChanson": $this->idChanson = $value; break;
                case "idInterprete": $this->idInterprete = $value; break;
            }
        }
    }