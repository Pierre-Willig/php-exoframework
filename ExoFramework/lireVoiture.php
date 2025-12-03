<?php
    require_once "Model.php";
    
    $rep = Model::$pdo ->query("SELECT * FROM vehicule");
    $table_obj = $rep->fetchAll(PDO::FETCH_CLASS, "Voiture");

    foreach ($table_obj as $key => $value) {
        echo $table_obj[$key]->afficher() ."<br>";
    }