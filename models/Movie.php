<?php

class Movie extends Production
{
    public function __construct(string $title, string $language, float $rating, array $genre, public string $profits, public float $duration)
    {
        parent::__construct($title, $language, $rating, $genre);
    }

    public function getProfit(): string
    {
        return "$$this->profits";
    }

    public function getDuration(): string
    {
        return "$this->duration hours";
    }
}
