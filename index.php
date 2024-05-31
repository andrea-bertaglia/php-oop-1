<?php

// importo le classi
require_once 'Models/movie.php';
require_once 'Models/genre.php';

// test inserimento dati
$movie1 = new Movie;
$movie1->setId(1001);
$movie1->setTitle('Il Signore degli Anelli');
$movie1->setOverview("Il Signore degli Anelli narra della missione di nove personaggi che compongono la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che potrebbe rendere invincibile il suo malvagio creatore Sauron se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo.");
$movie1->setYear(2001);
$movie1->setLanguage('it');
$movie1->setImgPath('https://copertine.hoepli.it/hoepli/xxl/505/1891/5051891155718.jpg');
$movie1->setVoteAvg(4.5);


var_dump($movie1);
