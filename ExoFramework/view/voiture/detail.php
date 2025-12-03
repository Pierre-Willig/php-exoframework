<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail voiture</title>
</head>
<body>
    <?php 
    var_dump($tab_v);
        echo $tab_v->getImmatriculation()." , ".$tab_v->getMarque().", ".$tab_v->getCouleur();
    ?>
</body>
</html>