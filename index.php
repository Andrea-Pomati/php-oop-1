<?php 
//definisco una classe
class Movie 
{
//dichiaro le variabili d'istanza
    public $title;
    public $year;
    public $genre;

// definisco un costruttore
     public function __construct($title, $year, $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;

    }
  


// definisco un metodo
    public function getHtml()
    
    {
        return "<h1>Title: " . $this->title . "</h1>"
            . "<h3>Year: " . $this->year . "<h3>"
            . "<h3>Genre: " . $this->genre . "</h3>";

    }
}

//Istanzio due oggetti `Movie` e stampo a schermo i valori delle relative proprietà:
$starWars = new Movie("Star Wars A New Hope", "1977", "space opera");
$lordOfTheRings = new Movie("The Lord of the Rings: The Fellowship of the Ring", "2001", "fantasy");



// creo un array di Movies e un ciclo con foreach:
$movies = [$starWars, $lordOfTheRings];

foreach ($movies as $movie) {
 echo $movie->getHtml();
}