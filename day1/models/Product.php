<?php

class Product {
    private $name;
    private $price;

    // Constructor
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    // Setters (optional)
    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    // Static method to return sample products
    public static function getSampleProducts() {
        return [
            new Product("Apple", 100),
            new Product("Banana", 60),
            new Product("Carrot", 40),
            new Product("Date", 120),
            new Product("Eggplant", 50)
        ];
    }
}
