<?php
require_once "models/Product.php";

class HomeController {
    public function index() {
        $products = Product::getSampleProducts();
        require "views/home.php";
    }
}
