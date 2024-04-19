<?php

class TVSerie extends Production
{
    public function __construct(string $title, string $language, float $rating, array $genre, public int $seasons)
    {
        parent::__construct($title, $language, $rating, $genre);
    }
}
