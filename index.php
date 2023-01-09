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
    public function set_date() {
        if (is_numeric($this->date)) {
            return "<h2>è un numero</h2>";
        } else {
            return "<h2>non è un numero</h2>";
        };
    }
}
;
$firstmovie = new Movie('In viaggio con pippo', 'Kevin Lima', 'animation', '1995');
$secondmovie = new Movie('Le follie dell imperatore', 'Mark Dindal', 'animation', '2000');

var_dump($firstmovie);
var_dump($secondmovie);
?>
