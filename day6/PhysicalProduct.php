<?php
require_once 'Product.php';

class PhysicalProduct extends Product {
    private $weight;

    public function __construct($name, $price, $weight) {
        parent::__construct($name, $price);
        $this->setWeight($weight);
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        if (is_numeric($weight) && $weight >= 0) {
            $this->weight = $weight;
        }
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Weight: " . $this->getWeight() . " kg<br>";
    }
}
?>
