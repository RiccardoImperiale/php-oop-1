<?php

class Genre
{
    public function __construct(public string $name, public string $description)
    {
    }
}

$horror = new Genre('Horror', 'Horror films may incorporate incidents of physical violence and psychological terror');
$comedy = new Genre('Comedy', 'Comedy films are designed to elicit laughter from the audience');
$drama = new Genre('Drama', 'Drama films are a genre that relies on the emotional and relational development of realistic characters');
$action = new Genre('Action', 'Action films typically include high-energy, large-scale action sequences with a focus on physical stunts and chases');
$scifi = new Genre('Science Fiction', 'Science fiction films explore speculative concepts such as advanced science and technology, space exploration, time travel, and extraterrestrial life');
$thriller = new Genre('Thriller', 'Thriller film, also known as suspense film or suspense thriller, is a broad film genre that evokes excitement and suspense in the audience');
$fantasy = new Genre('Fantasy', 'Fantasy films have fantastic themes, usually magic, supernatural events, mythology, folklore, or exotic fantasy worlds');
