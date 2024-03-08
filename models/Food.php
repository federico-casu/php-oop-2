<?php

class Food extends Item {
    static protected $type = 'Food';
    protected $calories;

    function __construct(string $_name, float $_price, string $_pet, float $_calories)
    {
        parent::__construct($_name, $_price, $_pet);
        $this->calories = $_calories;
    }

    public function getType() {
        return self::$type;
    }

    public function setCalories($_calories) {
        $this->calories = $_calories;
    }

    public function getCalories() {
        return $this->calories;
    }
}