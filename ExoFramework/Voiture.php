<?php
    require_once "Model.php";
    class Voiture {
        private $immatriculation, $marque, $couleur;
        public function __construct($i = NULL, $m = NULL, $c = NULL) {
            if (!is_null($m) && !is_null($c) && !is_null($i)) {
                $this->immatriculation= $i;
                $this->marque=$m;
                $this->couleur=$c;
            }   
        }

        public function afficher() {
            return $this->immatriculation. ", marque: ". $this->marque .", couleur: ". $this->couleur;
        }

        public static function getAllVoitures() {
            $rep = Model::$pdo ->query("SELECT * FROM vehicule");
            $table_obj = $rep->fetchAll(PDO::FETCH_CLASS, "Voiture");
            return $table_obj;
        }
    }