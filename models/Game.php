<?php

class Game extends Item {
    static protected $type = 'Game';
    protected $genre;

    function __construct(string $_name, float $_price, string $_pet, string $_genre)
    {
        parent::__construct($_name, $_price, $_pet);
        $this->genre = $_genre;
    }

    public function getType() {
        return self::$type;
    }

    public function setGenre($_genre) {
        $this->genre = $_genre;
    }

    public function getGenre() {
        return $this->genre;
    }

}