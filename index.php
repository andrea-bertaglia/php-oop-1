<?php

// importo le classi
require_once 'Models/movie.php';
require_once 'Models/genre.php';

// setter genre
$genre1 = new Genre;
$genre1->setGenre('Fantascienza');
$genre2 = new Genre;
$genre2->setGenre('Drammatico');
$genre3 = new Genre;
$genre3->setGenre('Comico');


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

//  setter dati secondo movie
$movie2 = new Movie;
$movie2->setId(1002);
$movie2->setTitle('Avatar');
$movie2->setOverview("L'ex marine Jake Sully è stato reclutato per una missione sul pianeta Pandora con lo scopo di recuperare risorse naturali in esaurimento sulla Terra. Inaspettatamente si ritrova a voler proteggere il mondo magico al quale si sente stranamente legato.");
$movie2->setYear(2010);
$movie2->setLanguage('it');
$movie2->setImgPath('https://www.postermania.it/77651-thickbox_default/locandina-avatar-2-la-via-dell-acqua-james-cameron-worthington-zoe-saldana-b35.jpg');
$movie2->setVoteAvg(4.7);
$movie2->genre = $genre2;

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

// getter dati secondo movie
var_dump($movie2->getId());
var_dump($movie2->getTitle());
var_dump($movie2->getOverview());
var_dump($movie2->getYear());
var_dump($movie2->getLanguage());
var_dump($movie2->getImgPath());
var_dump($movie2->getVoteAvg());
var_dump($movie2->genre->getGenre());
