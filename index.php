<?php

// importo le classi
require_once 'Models/movie.php';
require_once 'Models/genre.php';


$genre1 = new Genre('Fantascienza');

//  setter dati primo movie
$movie1 = new Movie;
$movie1->setId(1001);
$movie1->setTitle('Il Signore degli Anelli');
$movie1->setOverview("Il Signore degli Anelli narra della missione di nove personaggi che compongono la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che potrebbe rendere invincibile il suo malvagio creatore Sauron se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo.");
$movie1->setYear(2001);
$movie1->setLanguage('it');
$movie1->setImgPath('https://pad.mymovies.it/filmclub/2002/01/011/locandina.jpg');
$movie1->setVoteAvg(4.5);
$movie1->genre = $genre1;


// getter dati primo movie
var_dump($movie1->getId());
var_dump($movie1->getTitle());
var_dump($movie1->getOverview());
var_dump($movie1->getYear());
var_dump($movie1->getLanguage());
var_dump($movie1->getImgPath());
var_dump($movie1->getVoteAvg());
var_dump($movie1->genre->getGenre());

echo '<hr>';
