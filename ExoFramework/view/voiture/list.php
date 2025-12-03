<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        foreach ($tab_v as $v)
            echo "<p> Voiture d'immatriculation <a href='../controller/routeur.php?action=read&immat=".$v->getImmatriculation()."'>". $v->getImmatriculation() ."</a>. || <a href='../controller/routeur.php?action=delete&immat=".$v->getImmatriculation()."'> Delete ? </a></p>";
        ?>
        <a href="../controller/routeur.php?action=create">Formulaire de création</a>
    </body>
</html>