<?php

class Movie {
    private string $title;
    private string $studio;
    private string $rating;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating){
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getPG(array $movie) {
        $return = [];
        for ($i=0;$i<count($movie);$i++){
            if ($movie[$i]->rating=="PG"){
                return array_push($return,$movie[$i]);
            }
        }
    }
}

$CasinoRoyale = new Movie("Casino Royale","Eon Productions","PGSHY13");
$Glass = new Movie("Glass","Buena Vista International","PGSHY13");
$SpiderMan = new Movie("Spider-Man: Into the Spider-Verse","Columbia Pictures","PG");

$MoviesArray = [$CasinoRoyale,$Glass,$SpiderMan];
$CasinoRoyale->getPG($MoviesArray);

var_dump($CasinoRoyale);
