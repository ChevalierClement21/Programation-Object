<?php
include 'navbar.php';
require_once 'class_actu.php';
$id = $_REQUEST['id'];

$actualite = Actualite::detailArticle($id)
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit">
        <label for="titre">Titre</label>
        <input type="text" id="titre" value="<?php echo $actualite->titre ?>">
        <label for="contenu">Text</label>
        <input type="text" id="contenu" value="<?php echo $actualite->contenu ?>">
        <label for="auteur">auteur</label>
        <input type="text" id="auteur" value="<?php echo $actualite->auteur ?>">
        <label for="tags">Tags</label>
        <input type="text" id="tags" value="<?php echo $actualite->tags ?>">
        <label for="source">Source</label>
        <input type="text" id="source" value="<?php echo $actualite->source ?>">
        <button type="submit">Modifier</button>
    </form>
</body>
</html>