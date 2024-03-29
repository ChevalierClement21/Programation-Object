<?php 
require_once 'classePDOMERE.php';

Class Gestion extends donneePdo{

    public $titre;
    public $contenu;
    public $image;
    public $date_publication;
    public $auteur;
    public $tags;
    public $source;
    public $id_actu;

    public function __construct(array $tableau)
    {
        $this ->id_actu = $tableau['id_actualite'];
        $this ->titre = $tableau['titre'];
        $this ->contenu = $tableau['corps_texte'];
        $this ->image = $tableau['image'];
        $this ->date_publication = $tableau['date_publication'];
        $this -> auteur = $tableau['auteur'] ;
        $this ->tags = $tableau['tags'];
        $this ->source = $tableau['source'];
    }

    public static function modifier($pdo)
    {
        $_REQUEST
        $sql ='UPDATE actualite SET titre "'.$id.'" ';
    }
}

?>