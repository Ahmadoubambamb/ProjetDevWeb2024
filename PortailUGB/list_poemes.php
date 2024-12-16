<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes poeme</title>
</head>
<body>

       <a href = "form_ajouter.php">Ajouter un poeme</a>

       <table>
           <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Contenu</th>
            <th>Date de publication</th>
            <th>Modifier</th>
            <th>Supprimer</th>
           </tr>
                   <tr>
                        <td><?php echo $ligne['titre'];?></td>
                        <td><?php echo $ligne['auteur'];?></td>
                        <td><?php echo $ligne['contenu'];?></td>
                        <td><?php echo $ligne['Dates'];?></td>
                        <td><a href="form_modifier.php?id=<?php echo $ligne['id'];?>">Modifier</a></td>
                        <td><a href="supprimer.php?id=<?php echo $ligne['id'];?>">Supprimer</td>
                   </tr>

       </table>
</body>
</html>