<?php
    Class ComposantMenu{
        protected $title;
        protected $url;
        

        public function __construct($title, $url) {
            $this->title = $title;
            $this->url = $url;
        }
    
        public function affichage() {
            return "<a class='dropdown-item' href='{$this->url}'>{$this->title}</a>";
        }
    }
    
?> 