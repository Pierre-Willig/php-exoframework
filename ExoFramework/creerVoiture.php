<?php
    
    require_once "Voiture.php";
    var_dump($_POST);

    $vehicule = new Voiture($_POST["imma"], $_POST["marque"], $_POST["couleur"]);
   var_dump($vehicule);
    $vehicule->save();