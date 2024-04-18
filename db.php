<?php

require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/Genre.php';

$horror = new Genre('Horror', 'Horror films may incorporate incidents of physical violence and psychological terror');
$comedy = new Genre('Comedy', 'Comedy films are designed to elicit laughter from the audience');
$drama = new Genre('Drama', 'Drama films are a genre that relies on the emotional and relational development of realistic characters');
$action = new Genre('Action', 'Action films typically include high-energy, large-scale action sequences with a focus on physical stunts and chases');
$scifi = new Genre('Science Fiction', 'Science fiction films explore speculative concepts such as advanced science and technology, space exploration, time travel, and extraterrestrial life');

$productions = [
    new Production('Matrix', 'English', 9, $action),
    new Production('Parasite', 'Korean', 10, $horror),
    new Production('The Hangover', 'English', 8, $comedy),
    new Production('The Shawshank Redemption', 'English', 9, $drama),
    new Production('Die Hard', 'English', 7, $action),
    new Production('Interstellar', 'English', 9, $scifi)
];
