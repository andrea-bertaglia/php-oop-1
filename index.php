<?php

// importo le classi
require_once 'Models/movie.php';
require_once 'Models/genre.php';

// setter genre
$genre_movie1 = new Genre;
$genre_movie1->setGenre('Fantasy', 'Avventura', '');

$genre_movie2 = new Genre;
$genre_movie2->setGenre('Drammatico', 'Guerra', 'Classico');

//  setter dati primo movie
$movie1 = new Movie;
$movie1->setId(1001);
$movie1->setTitle('Il Signore degli Anelli');
$movie1->setOverview("Il Signore degli Anelli narra della missione di nove personaggi che compongono la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che potrebbe rendere invincibile il suo malvagio creatore Sauron se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo.");
$movie1->setYear(2001);
$movie1->setLanguage('it');
$movie1->setImgPath('https://pad.mymovies.it/filmclub/2002/01/011/locandina.jpg');
$movie1->setVoteAvg(4.5);
$movie1->genre = $genre_movie1;

//  setter dati secondo movie
$movie2 = new Movie;
$movie2->setId(1002);
$movie2->setTitle('La Vita è Bella');
$movie2->setOverview("Durante la dittatura fascista, Guido Orefice, giovane ebreo trasferitosi nella campagna toscana, conosce una maestra elementare, Dora, e con lei costruisce una famiglia. L'aggravarsi delle Leggi Razziali e i rastrellamenti nazisti portano l'uomo ad essere deportato in campo di concentramento con il figlioletto Giosuè. Per proteggere il piccolo dagli orrori dello sterminio, Guido costruisce eroicamente un elaborato mondo di vertiginose fantasie.");
$movie2->setYear(1997);
$movie2->setLanguage('it');
$movie2->setImgPath('https://www.cgtv.it/wp-content/uploads/2023/01/LOC1_3690.jpg');
$movie2->setVoteAvg(4.9);
$movie2->genre = $genre_movie2;

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
