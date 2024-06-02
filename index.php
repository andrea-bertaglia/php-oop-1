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
$movie1->setId(1);
$movie1->setTitle('Il Gladiatore');
$movie1->setOverview("Il generale romano Massimo Decimo Meridio, comandante dell'esercito del Nord, ha condotto ancora una volta i suoi legionari alla vittoria, ed ora spera di poter tornare alla sua famiglia. Ma il sovrano Marco Aurelio, oramai vecchio e stanco, gli chiede di assumere il comando dell'impero dopo la sua morte.");
$movie1->setDirector('Ridley Scott');
$movie1->setYear(2000);
$movie1->setLanguage('en');
$movie1->setImgPath('https://image.tmdb.org/t/p/original/2OMEABs7BpqAwsoZu9b3qLqrE5U.jpg');
$movie1->setVoteAvg(4.5);
$movie1->genre = $genre_movie1;
$movie1->cast->setActor($movie1_actor1);
$movie1->cast->setActor($movie1_actor2);
$movie1->cast->setActor($movie1_actor3);

// stampo i dati del primo film
// var_dump($movie1->getId());
// var_dump($movie1->getTitle());
// var_dump($movie1->getOverview());
// var_dump($movie1->getDirector());
// var_dump($movie1->getYear());
// var_dump($movie1->getLanguage());
// var_dump($movie1->getImgPath());
// var_dump($movie1->getVoteAvg());
// var_dump($movie1->genre->getGenre());
// var_dump($movie1->cast->getActor());
// echo '<hr>';

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
$movie2->setId(2);
$movie2->setTitle('La Vita è Bella');
$movie2->setOverview("Durante la dittatura fascista, Guido Orefice, giovane ebreo trasferitosi nella campagna toscana, conosce una maestra elementare, Dora, e con lei costruisce una famiglia. L'aggravarsi delle Leggi Razziali e i rastrellamenti nazisti portano l'uomo ad essere deportato in campo di concentramento con il figlioletto Giosuè. Per proteggere il piccolo dagli orrori dello sterminio, Guido costruisce eroicamente un elaborato mondo di vertiginose fantasie.");
$movie2->setDirector('Roberto Benigni');
$movie2->setYear(1997);
$movie2->setLanguage('it');
$movie2->setImgPath('https://image.tmdb.org/t/p/original/wxTNNTr5JgBmezniin4t3gXYQk8.jpg');
$movie2->setVoteAvg(4.9);
$movie2->genre = $genre_movie2;
$movie2->cast->setActor($movie2_actor1);
$movie2->cast->setActor($movie2_actor2);
$movie2->cast->setActor($movie2_actor3);


// stampo i dati del secondo film
// var_dump($movie2->getId());
// var_dump($movie2->getTitle());
// var_dump($movie2->getOverview());
// var_dump($movie2->getDirector());
// var_dump($movie2->getYear());
// var_dump($movie2->getLanguage());
// var_dump($movie2->getImgPath());
// var_dump($movie2->getVoteAvg());
// var_dump($movie2->genre->getGenre());
// var_dump($movie2->cast->getActor());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="bg-body-secondary pb-5">
    <div class="container">
        <div class="row text-center">
            <div class="col py-4">
                <h1 class="fw-bold">PHP Movies Exercise</h1>
            </div>
            <div class="row d-flex justify-content-center gap-4">
                <div class="col-4">
                    <div class="card h-100">
                        <img src="<?php echo $movie1->getImgPath() ?>" class="card-img-top" alt="<?php echo 'Locandina del film ' . $movie1->getTitle() ?>">
                        <div class="card-body">
                            <h5 class="card-title fs-4 py-3"><?php echo $movie1->getTitle() ?></h5>
                            <p class="card-text"><?php echo $movie1->getOverview() ?></p>
                            <div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Regista:</span>
                                    <span class="fw-bold ms-1"><?php echo $movie1->getDirector() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Anno:</span>
                                    <span class="fw-bold ms-1"><?php echo $movie1->getYear() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Lingua:</span>
                                    <span class="fw-bold ms-1"><?php echo $movie1->getLanguage() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Voto:</span>
                                    <span class="fw-bold ms-1"><?php echo $movie1->getVoteAvg() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Genere:</span>
                                    <span class="fw-bold ms-1 text-end"><?php echo $movie1->genre->getGenre() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Cast:</span>
                                    <div class="text-start">
                                        <span class="fw-bold ms-1"><?php echo $movie1->cast->getActor(0) ?></span>,
                                        <span class="fw-bold ms-1"><?php echo $movie1->cast->getActor(1) ?></span>,
                                        <span class="fw-bold ms-1"><?php echo $movie1->cast->getActor(2) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card h-100">
                        <img src=" <?php echo $movie2->getImgPath() ?>" class="card-img-top" alt="<?php echo 'Locandina del film ' . $movie2->getTitle() ?>">
                        <div class="card-body">
                            <h5 class="card-title fs-4 py-3"><?php echo $movie2->getTitle() ?></h5>
                            <p class="card-text"><?php echo $movie2->getOverview() ?></p>
                            <div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Regista:</span>
                                    <span class="fw-bold ms-1"><?php echo $movie2->getDirector() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Anno:</span>
                                    <span class="fw-bold ms-1"><?php echo $movie2->getYear() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Lingua:</span>
                                    <span class="fw-bold ms-1"><?php echo $movie2->getLanguage() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Voto:</span>
                                    <span class="fw-bold ms-1"><?php echo $movie2->getVoteAvg() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Genere:</span>
                                    <span class="fw-bold ms-1 text-end"><?php echo $movie2->genre->getGenre() ?></span>
                                </div>
                                <div class="d-flex justify-content-start py-3">
                                    <span>Cast:</span>
                                    <div class="text-start">
                                        <span class="fw-bold ms-1"><?php echo $movie2->cast->getActor(0) ?></span>,
                                        <span class="fw-bold ms-1"><?php echo $movie2->cast->getActor(1) ?></span>,
                                        <span class="fw-bold ms-1"><?php echo $movie2->cast->getActor(2) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>