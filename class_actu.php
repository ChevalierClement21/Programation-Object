<?php 

Class Actualite{
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
        //$this ->date_revision = $tableau['date_revision'];
        $this -> auteur = $tableau['auteur'] ;
        $this ->tags = $tableau['tags'];
        $this ->source = $tableau['source'];
    }

    public static function premierArticle($pdo){
        $sql = "SELECT * FROM actualite ORDER BY date_publication DESC LIMIT 5 ;";
        $temp = $pdo->query($sql);
        while ($actu = $temp->fetch()) {
            $actualite = new Actualite($actu);
            actualite($actualite);
        }
    }

    public static function detailArticle($pdo,$id){

        $sql = "SELECT * FROM actualite WHERE id_actualite = " . $id . ";";
        $temp = $pdo->query($sql);
        $resultat = $temp->fetch();
        $actualite = new Actualite($resultat);
        return $actualite;
    }
}

?>