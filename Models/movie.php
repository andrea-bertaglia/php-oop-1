<?php

// Creo la classe Movie
class Movie
{
    private int $id;
    private string $title;
    private string $overview;
    private string $director;
    private int $year;
    private string $language;
    private string $img_path;
    private float $vote_avg;
    public Genre $genre;
    public Actor $cast;
    public $counter_id;

    // istianzio cast con classe actor e resetto il contatore id
    public function __construct()
    {
        $this->cast = new Actor();
        $this->counter_id = 1000;
    }

    // setter/getter di id
    public function setId($id_number)
    {
        // formatto l'id
        $this->id = $this->counter_id + $id_number;
    }
    public function getId()
    {
        return $this->id;
    }

    // setter/getter di title
    public function setTitle($title)
    {
        // controllo se la stringa è lunga al massimo 20 caratteri
        if (strlen($title) < 20) {
            $this->title = $title;
        };
    }
    public function getTitle()
    {
        return $this->title;
    }

    // setter/getter di overview
    public function setOverview($overview)
    {
        // controllo se la stringa è lunga al massimo 500 caratteri
        if (strlen($overview) < 500) {
            $this->overview = $overview;
        };
    }
    public function getOverview()
    {
        return $this->overview;
    }

    // setter/getter di director
    public function setDirector($director)
    {
        // controllo se la stringa è lunga al massimo 20 caratteri
        if (strlen($director) < 20) {
            $this->director = $director;
        };
    }
    public function getDirector()
    {
        return $this->director;
    }

    // setter/getter di year
    public function setYear($year)
    {
        // controllo che l'anno non sia negativo o superiore all'anno attuale
        if ($year > 0 and $year <= date("Y")) {
            $this->year = $year;
        }
    }
    public function getYear()
    {
        return $this->year;
    }

    // setter/getter di language
    public function setLanguage($language)
    {
        // verifico che la lingua inserita sia tra quelle disponibili
        if ($language === 'it' or 'en') {
            $this->language = $language;
        }
    }
    public function getLanguage()
    {
        // formato l'output della lingua
        if ($this->language === 'it') {
            return 'Italiano';
        } elseif ($this->language === 'en') {
            return 'Inglese';
        }
    }

    // setter/getter di img_path
    public function setImgPath($img_path)
    {
        // verifico se il path inizia per "https://"
        $string_correct_path = 'https://';
        if (str_starts_with($img_path, $string_correct_path)) {
            $this->img_path = $img_path;
        }
    }
    public function getImgPath()
    {
        return $this->img_path;
    }

    // setter/getter di vote_avg
    public function setVoteAvg($vote_avg)
    {
        // verifico se il voto medio è inferiore a 5
        if ($vote_avg <= 5) {
            $this->vote_avg = $vote_avg;
        }
    }
    public function getVoteAvg()
    {
        return $this->vote_avg;
    }
}
