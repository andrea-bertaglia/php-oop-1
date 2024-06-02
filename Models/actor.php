<?php

class Actor
{
    private array $actors;

    // inizializzo l'array
    public function __construct()
    {
        $this->actors = [];
    }

    // setter/getter di actor
    public function setActor($actor)
    {
        $this->actors[] = $actor;
    }
    public function getActor($i)
    {
        if (isset($this->actors[$i])) {
            return $this->actors[$i]['name'] . ' ' . $this->actors[$i]['surname'];
        }
    }
}
