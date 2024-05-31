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
    private float $vote_avg;
    public Genre $genre;

    // public function __construct(int $id, string $title, string $overview, int $year, string $language)
    // {
    //     $this->id         = $id;
    //     $this->title      = $title;
    //     $this->overview   = $overview;
    //     $this->year       = $year;
    //     $this->language   = $language;
    // }

    // setter/getter di id
    public function setId($id_number)
    {
        $this->id = $id_number;
    }
    public function getId()
    {
        return $this->id;
    }

    // setter/getter di title
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    // setter/getter di overview
    public function setOverview($overview)
    {
        $this->overview = $overview;
    }
    public function getOverview()
    {
        return $this->overview;
    }

    // setter/getter di year
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getYear()
    {
        return $this->year;
    }

    // setter/getter di language
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getLanguage()
    {
        return $this->language;
    }

    // setter/getter di img_path
    public function setImgPath($img_path)
    {
        $this->img_path = $img_path;
    }
    public function getImgPath()
    {
        return $this->img_path;
    }

    // setter/getter di vote_avg
    public function setVoteAvg($vote_avg)
    {
        $this->vote_avg = $vote_avg;
    }
    public function getVoteAvg()
    {
        return $this->vote_avg;
    }
}
