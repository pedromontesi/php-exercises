<?php

class Product {
	private $item;
	private $description;
	private $price;

	public function __construct($item, $description, $price) {
		if (is_string($item)) {
			$this->item = $item;

		}

		if (is_string($description)) {
			$this->description = $description;

		}


		if (is_numeric($price) && $price > 0) {
			$this->price = $price;

		}
	}

	public function getItem() {
		return $this->item;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getPrice() {
		return $this->price;
	}

}

$p1 = new Product('Chocolate', '70% ao leite', 35);


print 'Item: ' . $p1->getItem() . PHP_EOL;
print 'Descrição: ' . $p1->getDescription() . PHP_EOL;
print 'Preço: ' . $p1->getPrice() . PHP_EOL;

