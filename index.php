<?
class Movie {
    public $title;
    public $director;
    public $genre;
    public $date;

    public function __construct($_title, $_director, $_genre, $_date) {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->date = $_date;
    }
}
;
$firstmovie = new Movie('In viaggio con pippo', 'Kevin Lima', 'animation', '1995');
$secondmovie = new Movie('Le follie dell imperatore', 'Mark Dindal', 'animation', '2000');

var_dump($firstmovie);
var_dump($secondmovie)
?>
