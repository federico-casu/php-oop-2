<?php

trait Availability {
    protected $in_stock = false;
    protected $quantity = 0;

    public function setInStock(bool $_in_stock) {
        $this->in_stock = $_in_stock;
    }

    public function getInStock() {
        return $this->in_stock;
    }

    public function setQuantity(int $_quantity) {
        $this->quantity = $_quantity;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}