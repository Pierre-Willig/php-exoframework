<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire nouvelle voiture</title>
</head>
<body>
    <form action="../controller/routeur.php" method="GET">
        <fieldset>
            <legend>Créer une nouvelle voiture</legend>
            <input type="hidden" name="action" value="created">
            <label for="immat">Immatriculation</label>
            <input type="text" name="immat" id="immat" required>
            <label for="marque">Marque</label>
            <input type="text" name="marque" id="marque">
            <label for="couleur">Couleur</label>
            <input type="text" name="couleur" id="couleur">
            <input type="submit" value="Enregistrer">
        </fieldset>
    </form>
</body>
</html>