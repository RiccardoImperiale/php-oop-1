<?php

class Movie extends Production
{
    public function __construct(string $title, string $language, int $rating, Genre $genre, public int $profits, public int $duration)
    {
        parent::__construct($title, $language, $rating, $genre);
    }
}
