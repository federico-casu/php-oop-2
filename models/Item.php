<?php

include __DIR__ . '/Availability.php';
class Item {
    protected $name;
    protected $price;
    protected $image;
    protected $pet;
    use Availability;

    function __construct(string $_name, float $_price, string $_pet)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->pet = $_pet;
    }

    public function setImage($_image) {
        $this->image = $_image;
    }

    public function getImage() {
        return $this->image;
    }

    public function setName($_name) {
        $this->name = $_name;
    }

    public function getName() {
        return $this->name;
    }

    public function setPrice($_price) {
        $this->price = $_price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPet($_pet) {
        $this->pet = $_pet;
    }

    public function getPet() {
        return $this->pet;
    }
}