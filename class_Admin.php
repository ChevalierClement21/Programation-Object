<?php
require_once'classePDOMERE.php';
Class Parametre extends donneePdo{

    public $titre;
    public $contenu;
    public $image;
    public $date_publication;
    public $auteur;
    public $tags;
    public $source;
    public $id_actu;

    public function __construct(array $table)
    {
        $this ->id_actu = $table['id_actualite'];
        $this ->titre = $table['titre'];
        $this ->contenu = $table['corps_texte'];
        $this ->image = $table['image'];
        $this ->date_publication = $table['date_publication'];
        //$this ->date_revision = $tableau['date_revision'];
        $this -> auteur = $table['auteur'] ;
        $this ->tags = $table['tags'];
        $this ->source = $table['source'];
    }

    public static function suppr($pdo){
        $sql = "DELETE FROM article WHERE id_article=' .";
        $pdo ->exec($sql);
    }
}

?>