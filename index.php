<?php

class Production
{
    public $title;
    public $language;
    public $rating;

    public function __construct($title, $language, $rating)
    {
        $this->title = $title;
        $this->language = $language;
        if ($rating >= 1 && $rating <= 10) {
            $this->rating = $rating;
        } else {
            throw new InvalidArgumentException("Rating must be between 1 and 10");
        }
    }
}

$production1 = new Production('Matrix', 'English', 9);
$production2 = new Production('Parasite', 'Korean', 10);

// var_dump($production1, $production2);
echo "Title: $production1->title, Language: $production1->language, Rating: $production1->rating";
echo '<br>';
echo "Title: $production2->title, Language: $production2->language, Rating: $production2->rating";
