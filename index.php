<?php
class Movie {
    public $title;
    public $director;
    public $genre;
    public $date;

    function __constructor($title, $director, $genre, $date) {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->date = $date;
    }
} 
?>
