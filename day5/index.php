<?php
class Product {
    // Properties
    public $id;
    public $name;
    public $price;

    // Constructor to initialize the product
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to add a product
    public function addProduct() {
        echo "Product added: ID = $this->id, Name = $this->name, Price = $this->price <br>";
    }

    // Method to update product details
    public function updateProduct($newName, $newPrice) {
        $this->name = $newName;
        $this->price = $newPrice;
        echo "Product updated: ID = $this->id, New Name = $this->name, New Price = $this->price <br>";
    }

    // Method to delete a product
    public function deleteProduct() {
        echo "Product deleted: ID = $this->id <br>";
        // Optionally set properties to null
        $this->id = null;
        $this->name = null;
        $this->price = null;
    }
}

// Using the Product class
$product1 = new Product(101, "Laptop", 50000);
$product1->addProduct();

$product1->updateProduct("Gaming Laptop", 75000);

$product1->deleteProduct();
?>
