<?php
class Movies
{
    private $title;
    private $genre;
    private $year;
    private $rating;

    public function __construct($_title,$_genre,$_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    public function setRating($_rating){
        if (($_rating>=0 && $_rating<=5)&&(is_numeric($_rating))) {
            $this->rating = $_rating;
        } 
    }
    public function getTitle(){
        return $this->title;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getYear(){
        return $this->year;
    }
    public function getRating(){
        return $this->rating;
    }


}
