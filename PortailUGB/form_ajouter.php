<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="content">
    <form method="post" action="ajouter.php">
        <h3>Ajouter un poème</h3> <br>
        
        <label for="titre">Titre :</label> <br>
        <input type="text" name="titre" /> <br>

        <label for="auteur">Auteur :</label> <br>
        <input type="text" name="auteur" /> <br>
        
        <label for="contenu">Contenu :</label> <br>
        <textarea name="contenu"></textarea> <br>

        <label for="contenu">Date publication :</label> <br>
        <input type="text" name="Dates" /> <br>

        <input type="submit" name="valider" value="valider" />
    </form>
</div>

</body>
</html>