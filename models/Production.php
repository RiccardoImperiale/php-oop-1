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
