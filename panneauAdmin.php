<?php 
require_once 'class_actu.php';
include 'navbar.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>titre</td>
            <td>Texte</td>
            <td>Image</td>
            <td>Date de publication</td>
            <td>Auteur</td>
            <td>Tags</td>
            <td>Source</td>
            <td>Action</td>
        </tr>
    <?php 
    $actualites = Actualite::Article($pdo);
    foreach ($actualites as $actualite) {
    ?>
        <tr>
            <td><?php echo $actualite->id_actu ?></td>
            <td><?php echo $actualite->titre ?></td>
            <td><?php echo $actualite->contenu ?></td>
            <td><?php echo $actualite->image ?></td>
            <td><?php echo $actualite->date_publication ?></td>
            <td><?php echo $actualite->auteur ?></td>
            <td><?php echo $actualite->tags ?></td>
            <td><?php echo $actualite->source ?></td>
            <td><a href = 'modif.php?id=<?php echo $actualite->id_actu ?>'>Modification</td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>