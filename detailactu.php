<?php
include 'navbar.php';
include 'baseDonnee.php';
require_once'class_actu.php';
$id = $_REQUEST["id"];

$actualite = Actualite::detailArticle($pdo,$id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='lire-blog-container'>
        <div class='lire-blog-entete'>
            <h3 class='titre-lire-blog'><?php echo $actualite->titre ?></h3>
        </div>
        <div class='lire-blog-paper'>
            <img src="<?php echo $actualite->image ?>" alt="">
            <h4>Présentation du blog :</h4>
                <div>
                    <p> <!-- description du blog  -->
                    Tag : <?php echo $actualite->tags?>
                    </p>
                    <p> <!-- description du blog  -->
                    Nom auteur : <?php echo $actualite->auteur ?>
                    </p>
                    <p>
                    Source: <?php echo $actualite->source   ?>
                    </p>
                </div>
                <div>
                    <p class='text-lire-blog'>
                        <?php echo $actualite->contenu ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
</body>
</html>