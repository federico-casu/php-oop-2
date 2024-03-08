<?php

class Product extends Item {
    static protected $type = 'Product';

    function __construct(string $_name, float $_price, string $_pet)
    {
        parent::__construct($_name, $_price, $_pet);
    }

    public function getType() {
        return self::$type;
    }
}