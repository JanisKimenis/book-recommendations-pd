<?php
class Review
{
    private $name;
    private $surname;
    private $book_title;
    private $description;
    private $rating;


    function __consturct($name, $surname, $book_title, $description, $rating)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->book_title = $book_title;
        $this->description = $description;
        $this->rating = $rating;
    }
    function getFullName($name, $surname)
    {
        return $name . " " . $surname;
    }
}
