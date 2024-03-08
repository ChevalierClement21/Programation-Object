<?php 
    require_once 'navbar.php';
    require_once 'baseDonnee.php';
    require_once 'class_contact.php';


    if (isset($_REQUEST["prenom"], $_REQUEST["nom"], $_REQUEST["email"])){
        $prenom = htmlentities($_REQUEST["prenom"]);
        $nom = htmlentities($_REQUEST["nom"]);
        $email = htmlentities($_REQUEST["email"]);
    
        $contact = new Contact($prenom, $nom, $email);
        $contact ->ajout($pdo,$contact);
        header("Location: Accueil.php");
        exit();

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
    <form action="contact.php" method="post">
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
        require_once 'footer.php';
    ?>
</body>
</html>