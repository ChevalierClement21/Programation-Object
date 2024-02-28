<?php 
    include 'navbar.php';
    include 'baseDonnee.php';


    if (isset($_REQUEST["prenom"], $_REQUEST["nom"], $_REQUEST["email"])){
        $prenom = htmlentities($_REQUEST["prenom"]);
        $nom = htmlentities($_REQUEST["nom"]);
        $email = htmlentities($_REQUEST["email"]);

        $sql = 'INSERT INTO contacts (nom,prenom,mail) VALUES("'.$nom.'","'.$prenom.'","'.$email.'");';
        $temp = $pdo->exec($sql);
        echo "Formulaire envoyez";
    }

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
    <form action="Accueil.php" method="post">
        <label for="nom">Votre Nom :</label>
        <input type="text" name="nom" id="nom" required/>
        <br>
        <label for="prenom">Votre Prénom :</label>
        <input type="text" name="prenom" id="prenom" required/>
        <br>
        <label for="email">Votre Email :</label>
        <input type="email" name="email" id="email" required/>
        <br>
        <input type="submit" name="Envoyez">
    </form>


    <?php
        include 'footer.php';
    ?>
</body>
</html>