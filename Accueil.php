<?php
include 'baseDonnee.php';
include 'session.php';
include 'navbar.php';
require_once 'class_actu.php';
function actualite ($actualite){
    echo'
    <div class="blog-img-container">
        <a href="detailactu.php?id='. $actualite->id_actu.'"><img src="'.$actualite->image.'"></a>
        <div class="white-card">
            <h3 class="titre-blog">'.$actualite->titre.'</h3>
            <h4>'.$actualite->tags.'</h4>
            <p class="txt-blog-2"> Auteur :'.$actualite->auteur.' Source :'.$actualite->source.'</p>
        </div>
    </div> ';
}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="carte-blog">
        <?php
        Actualite::premierArticle($pdo);
        ?>
        </div>
        <?php
        include 'footer.php';
        ?>
</body>
</html>