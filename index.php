<?php

// importo le classi
require_once 'Models/movie.php';
require_once 'Models/genre.php';
require_once 'Models/actor.php';


// ! PRIMO FILM
// creo gli attori del primo film
$movie1_actor1 = ["name" => "Russell", "surname" => "Crowe", "date_birth" => "'07'-04-1964"];
$movie1_actor2 = ["name" => "Joaquin", "surname" => "Phoenix", "date_birth" => "28-10-1974"];
$movie1_actor3 = ["name" => "Connie", "surname" => "Nielsen", "date_birth" => "03-07-1965"];

// creo il genere per il primo film
$genre_movie1 = new Genre();
$genre_movie1->setGenre('Storia', 'Drammatico', '');

// creo il primo film
$movie1 = new Movie();
$movie1->setId(1001);
$movie1->setTitle('Il Gladiatore');
$movie1->setOverview("Il generale romano Massimo Decimo Meridio, comandante dell'esercito del Nord, ha condotto ancora una volta i suoi legionari alla vittoria, ed ora spera di poter tornare alla sua famiglia. Ma il sovrano Marco Aurelio, oramai vecchio e stanco, gli chiede di assumere il comando dell'impero dopo la sua morte.");
$movie1->setDirector('Ridley Scott');
$movie1->setYear(2000);
$movie1->setLanguage('it');
$movie1->setImgPath('https://www.postermania.it/2382-thickbox_default/locandina-il-gladiatore-ridley-scott-russell-crowe-joaquin-phoenix-cinema-cat1.jpg');
$movie1->setVoteAvg(4.5);
$movie1->genre = $genre_movie1;
$movie1->cast->setActor($movie1_actor1);
$movie1->cast->setActor($movie1_actor2);
$movie1->cast->setActor($movie1_actor3);


// stampo i dati del primo film
var_dump($movie1->getId());
var_dump($movie1->getTitle());
var_dump($movie1->getOverview());
var_dump($movie1->getDirector());
var_dump($movie1->getYear());
var_dump($movie1->getLanguage());
var_dump($movie1->getImgPath());
var_dump($movie1->getVoteAvg());
var_dump($movie1->genre->getGenre());
var_dump($movie1->cast->getActor());
echo '<hr>';

// ! SECONDO FILM
// creo gli attori del secondo film
$movie2_actor1 = ["name" => "Roberto", "surname" => "Benigni", "date_birth" => "27-10-1952"];
$movie2_actor2 = ["name" => "Nicoletta", "surname" => "Braschi", "date_birth" => "19-04-1960"];
$movie2_actor3 = ["name" => "Giorgio", "surname" => "Cantarini", "date_birth" => "12-04-1992"];

// creo il genere per il secondo film
$genre_movie2 = new Genre();
$genre_movie2->setGenre('Drammatico', 'Guerra', 'Classico');

// creo il secondo film
$movie2 = new Movie();
$movie2->setId(1002);
$movie2->setTitle('La Vita è Bella');
$movie2->setOverview("Durante la dittatura fascista, Guido Orefice, giovane ebreo trasferitosi nella campagna toscana, conosce una maestra elementare, Dora, e con lei costruisce una famiglia. L'aggravarsi delle Leggi Razziali e i rastrellamenti nazisti portano l'uomo ad essere deportato in campo di concentramento con il figlioletto Giosuè. Per proteggere il piccolo dagli orrori dello sterminio, Guido costruisce eroicamente un elaborato mondo di vertiginose fantasie.");
$movie1->setDirector('Roberto Benigni');
$movie2->setYear(1997);
$movie2->setLanguage('it');
$movie2->setImgPath('https://www.cgtv.it/wp-content/uploads/2023/01/LOC1_3690.jpg');
$movie2->setVoteAvg(4.9);
$movie2->genre = $genre_movie2;
$movie2->cast->setActor($movie2_actor1);
$movie2->cast->setActor($movie2_actor2);
$movie2->cast->setActor($movie2_actor3);


// stampo i dati del secondo film
var_dump($movie2->getId());
var_dump($movie2->getTitle());
var_dump($movie2->getOverview());
var_dump($movie1->getDirector());
var_dump($movie2->getYear());
var_dump($movie2->getLanguage());
var_dump($movie2->getImgPath());
var_dump($movie2->getVoteAvg());
var_dump($movie2->genre->getGenre());
var_dump($movie2->cast->getActor());
