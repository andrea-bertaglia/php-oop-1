<?php

// creo la classe Movie
class Movie
{

    private int $id;
    private string $title;
    private string $overview;
    private int $year;
    private string $language;
    private string $img_path;
    private int $vote_avg;
    private Genre $genres;
}
