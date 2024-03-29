<?php 
require_once 'class_menu.php';
class Menu {
    protected $title;
    protected $items = [];

    public function __construct($title) {
        $this->title = $title;
    }

    public function Ajout($title, $url) {
        $this->items[] = new ComposantMenu($title, $url);
    }

    public function affichage() {
        $html = "<li class='nav-item dropdown'>";
        $html .= "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>{$this->title}</a>";
        $html .= "<ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
        foreach ($this->items as $item) {
            $html .= $item->affichage();
        }
        $html .= "</ul></li>";
        return $html;
    }
    
}

?>