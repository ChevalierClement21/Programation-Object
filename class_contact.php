<?php
require_once'classePDOMERE.php';
Class Contact extends donneePdo{
    public $nom;
    public $prenom;
    public $mail;

    public function __construct(string $nom, string $prenom, string $email){
        $this ->nom = $nom;
        $this ->prenom = $prenom;
        $this ->mail = $email;
    }

    public static function ajout($pdo ,Contact $contact) {
        $sql = 'INSERT INTO contacts (nom, prenom, mail) VALUES (?, ?, ?)';
        $stmt = donneePdo::Ajouter($sql);
        $stmt->execute([$contact->nom, $contact->prenom, $contact->mail]);
        

    }
}
?>