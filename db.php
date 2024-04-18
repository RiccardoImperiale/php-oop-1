<?php

require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/Genre.php';

$productions = [
    new Production('Matrix', 'English', 9, new Genre('Action', 'Action films predominantly features chase sequences, fights, shootouts, explosions, and stunt work')),
    new Production('Parasite', 'Korean', 10, new Genre('Horror', 'Horror films may incorporate incidents of physical violence and psychological terror'))
];
