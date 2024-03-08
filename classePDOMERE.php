<?php
require_once 'baseDonnee.php';
Class donneePdo{



    public static function NewPDO(){
        $host = '127.0.0.1';
        $db = 'actualité';
        $user = 'root';
        $pass = '';
        $port = 3306;
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
        $pdo = new PDO($dsn, $user, $pass);
        return $pdo;
    }


    public static function Ajouter($sql){
        $pdo = donneePdo::NewPdo();
        $stmt = $pdo->prepare($sql);
        return $stmt;
    }

    public static function AfficherPremier($sql){
        $pdo = donneePdo::NewPdo();
        $temp = $pdo->query($sql);
        return $temp;
    }
    
    public static function detail($sql){
        $pdo = donneePdo::NewPDO();
        $temp = $pdo->query($sql);
        $resultat = $temp->fetch();
        return $resultat;
    }
}
    


?>