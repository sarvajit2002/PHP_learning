<?php
class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->setName($name);
        $this->setPrice($price);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        if (!empty($name)) {
            $this->name = $name;
        }
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        if (is_numeric($price) && $price >= 0) {
            $this->price = $price;
        }
    }

    public function displayInfo() {
        echo "Name: " . $this->getName() . "<br>";
        echo "Price: ₹" . $this->getPrice() . "<br>";
    }
}
?>
