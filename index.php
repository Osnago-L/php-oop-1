<?php
require_once __DIR__."./classes/Movies.php";

$film1 = [
    new Movies("film1","genere1","anno1"),
    new Movies("film2","genere2","anno2"),
    new Movies("film3","genere3","anno3"),
    new Movies("film4","genere4","anno4"),
    new Movies("film5","genere5","anno5"),
];
$film2 = new Movies("film(noArray)","genere(noArray)","anno(noArray)");

foreach ($film1 as $key) {
    $key->setRating(rand(0,5));
    echo " {$key->getTitle()} "." {$key->getGenre()} "." {$key->getYear()} "." {$key->getRating()} "."<br>";
};

echo "<br>"." {$film2->getTitle()} "." {$film2->getGenre()} "." {$film2->getYear()} "." {$film2->getRating()} "."<br>"
?>