<?php
require_once 'Product.php';

class DigitalProduct extends Product {
    private $fileSize;

    public function __construct($name, $price, $fileSize) {
        parent::__construct($name, $price);
        $this->setFileSize($fileSize);
    }

    public function getFileSize() {
        return $this->fileSize;
    }

    public function setFileSize($fileSize) {
        if (is_numeric($fileSize) && $fileSize >= 0) {
            $this->fileSize = $fileSize;
        }
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "File Size: " . $this->getFileSize() . " MB<br>";
    }
}
?>
