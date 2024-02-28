<?php
include 'navbar.php';
include 'baseDonnee.php';

$id = $_REQUEST["id"];

$sql = "SELECT * FROM actualite WHERE id_actualite = " . $id . ";";
$temp = $pdo->query($sql);
$resultat = $temp->fetch()

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
            <h3 class='titre-lire-blog'><?php echo $resultat['titre'] ?></h3>
        </div>
        <div class='lire-blog-paper'>
            <img src="<?php echo $resultat['image'] ?>" alt="">
            <h4>Présentation du blog :</h4>
                <div>
                    <p> <!-- description du blog  -->
                    Tag : <?php echo $resultat['tags']?>
                    </p>
                    <p> <!-- description du blog  -->
                    Nom auteur : <?php echo $resultat['auteur'] ?>
                    </p>
                    <p>
                    Source: <?php echo $resultat["source"]   ?>
                    </p>
                </div>
                <div>
                    <p class='text-lire-blog'>
                        <?php echo $resultat['corps_texte'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
</body>
</html>