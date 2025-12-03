<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read() {
        $immat = $_GET["immat"];
        try { 
            $tab_v = ModelVoiture::getVoitureByImmat($immat);
            require("../view/voiture/detail.php");
        } catch (Exception $e) {
            $error = $e->getMessage();
            require("../view/voiture/error.php");
        }
    }

    public static function create(){
        require ("../view/voiture/create.php");
    }

    public static function created(){
        $v = new ModelVoiture($_GET["immat"], $_GET["marque"], $_GET["couleur"]);
        try {
            $v->save();
            self::readAll();
        } catch (Exception $e) {
            $error = $e->getMessage();
            require("../view/voiture/error.php");
        }
    }

    public static function delete(){
        $immat = $_GET["immat"];
        try {
            $v = ModelVoiture::delete($immat);
            self::readAll();
        } catch (Exception $e) {
            $error = $e->getMessage();
            require("../view/voiture/error.php");
        }
    }

}
?>