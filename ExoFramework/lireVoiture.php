<?php
    require_once "Model.php";
    require_once "Voiture.php";

    $table = Voiture::getAllVoitures();

    foreach ($table as $key => $value) {
        echo $table[$key]->afficher() ."<br>";
    }