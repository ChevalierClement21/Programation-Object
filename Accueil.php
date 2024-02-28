<?php
include 'baseDonnee.php';
include 'session.php';
include 'navbar.php';

function actualite ($actu){
    echo '
    <div class="blog-img-container">
        <a href="detailactu.php?id='.$actu['id_actualite'].'"><img src="'.$actu['image'].'"></a>
        <div class="white-card">
            <h3 class="titre-blog">'.$actu['titre'].'</h3>
            <h4>'.$actu['tags'].'</h4>
            <p class="txt-blog-2"> Auteur :'.$actu['auteur'].' Source :'.$actu['source'].'</p>
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
        $sql ="SELECT * FROM actualite ;";
            $temp = $pdo->query($sql);
            while ($actu = $temp->fetch()){
                actualite($actu);
            }
        ?>
        </div>
</body>
</html>