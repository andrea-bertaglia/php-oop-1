<?php

class Genre
{
    private string $genre;

    // setter/getter di genre
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    public function getGenre()
    {
        return $this->genre;
    }
}
