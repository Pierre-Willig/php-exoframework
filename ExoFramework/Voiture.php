<?php
    require_once "Model.php";
    class Voiture {
        private $immatriculation, $marque, $couleur;
        public function __construct($i = NULL, $m = NULL, $c = NULL) {
            if (!is_null($m) && !is_null($c) && !is_null($i)) {
                $this->immatriculation = $i;
                $this->marque = $m;
                $this->couleur = $c;
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

        public static function getVoitureByImmat($immat) {
            $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array("nom_tag" => $immat);
            // On donne les valeurs et on exécute la requête     
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
            $tab_voit = $req_prep->fetchAll();
            // Attention, si il n'y a pas de résultats, on renvoie false
            if (empty($tab_voit))
                return false;
            return $tab_voit[0];
        }

        public function save() {
            
            $req = "INSERT INTO `vehicule`(`immatriculation`, `marque`, `couleur`) VALUES(:immatriculation,:marque,:couleur)";
            $req_prep = Model::$pdo->prepare($req);
            $value = array(
                "immatriculation" => $this->immatriculation,
                "marque" => $this->marque,
                "couleur" => $this->couleur
            );
            $req_prep->execute($value);
        }
    }