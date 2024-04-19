<?php

class TVSerie extends Production
{
    public function __construct(string $title, string $language, int $rating, Genre $genre, public int $seasons)
    {
        parent::__construct($title, $language, $rating, $genre);
    }
}
