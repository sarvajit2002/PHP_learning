<?php
require_once 'PhysicalProduct.php';
require_once 'DigitalProduct.php';

$book = new PhysicalProduct("Book", 250, 1.5);
$ebook = new DigitalProduct("E-Book", 100, 15);

echo "<h3>Physical Product:</h3>";
$book->displayInfo();

echo "<h3>Digital Product:</h3>";
$ebook->displayInfo();
?>
