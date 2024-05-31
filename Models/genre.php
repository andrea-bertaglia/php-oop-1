<?php

class Genre
{
    private string $genre1;
    private string $genre2;
    private string $genre3;


    // setter/getter di genre (ammette fino a 3 generi)
    public function setGenre($genre1, $genre2, $genre3)
    {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
        $this->genre3 = $genre3;
    }
    // verifica quanti generi sono inseriti e formatta il risultato
    public function getGenre()
    {
        if ($this->genre1 !== "") {
            $genre = $this->genre1;
        }
        if ($this->genre2 !== "") {
            $genre = $this->genre1 . ', ' . $this->genre2;
        }
        if ($this->genre3 !== "") {
            $genre = $this->genre1 . ', ' . $this->genre2 . ', ' . $this->genre3;
        }
        return $genre;
    }
}
