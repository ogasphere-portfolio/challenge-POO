<?php 

class Article {
    // propriétés
    public $title;
    public $content;
    public $author;
    public $date;
    public $category;

    /* $prems->title = 'Ivre, il refait tous les challenges en un week-end sans dormir.';
    $prems->content = 'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.';
    $prems->author = 'Alexandre';
    $prems->date = '2017-07-13';
    $prems->category = 'Ma Vie De Dev'; */

    public function __construct($titleAAjouter, $contentAAjouter, $authorAAjouter, $dateAAjouter,$categoryAAjouter)
    {
        echo "Je suis la méthode constructeur";
        // $this est l'instance, l'objet qui utilise la classe
        // $this représente l'instance de l'extérieur
        $this->title = $titleAAjouter;

        $this->content = $contentAAjouter;

        $this->author = $authorAAjouter;
        
        $this->date = $dateAAjouter;

        $this->category = $categoryAAjouter;
    }

   /*  public function nomfonction($variableArgument, $variableArgumentDeux)
    {
        
    } */

   
}