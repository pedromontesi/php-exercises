<?php
class Product {
    private $description;
    private $stock;
    private $price;

    private $characteristics;

    public function __construct($description, $stock, $price) {
        $this->description = $description;
        $this->stock = $stock;
        $this->price = $price;

    }

    public function getDescription() {
        return $this->description;
    }

    public function getStock() {
        return $this->stock;
    }

    public function addCharacteristic($name, $value) {
        $this->characteristics[] = new Characteristic($name, $value);

    }

    public function getCharacteristics() {
        return $this->characteristics;
    }

}
