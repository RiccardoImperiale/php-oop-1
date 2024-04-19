<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TVSerie.php';

$productions = [
    new Production('Matrix', 'English', 9, [$action, $thriller]),
    new Production('Parasite', 'Korean', 10, [$horror, $thriller]),
    new Production('The Hangover', 'English', 8, [$comedy, $action]),
    new Production('Drive', 'English', 9, [$drama]),
    new Production('Die Hard', 'English', 7, [$action, $comedy])
];

$movies = [
    new Movie('Joker', 'English', 8.4, [$thriller, $drama], '1.08 billion', 2.20),
    new Movie('Interstellar', 'English', 8.6, [$scifi], '677 million', 2.49),
    new Movie('Inception', 'English', 8.8, [$scifi, $thriller], '836 million', 2.28),
    new Movie('The Dark Knight', 'English', 9.0, [$action], '1.005 million', 2.32),
    new Movie('Shutter Island', 'English', 8.1, [$thriller], '294 million', 2.18)
];

$tvSeries = [
    new TVSerie('Breaking Bad', 'English', 9.5, [$drama, $thriller], 5),
    new TVSerie('Game of Thrones', 'English', 8.9, [$fantasy], 8),
    new TVSerie('Stranger Things', 'English', 8.7, [$horror, $drama], 4),
    new TVSerie('Severance', 'English', 9, [$thriller], 1),
    new TVSerie('Lost', 'English', 10, [$scifi], 6)
];
