<?php

require_once 'Cart.php';
require_once 'Product.php';

$c1 = new Cart();

$c1->addItem( $p1 = new Product('Chocolate', 10, 5) );
$c1->addItem( $p2 = new Product('Café', 100, 7) );
$c1->addItem( $p3 = new Product('Mostarda', 50, 3) );
foreach ($c1->getItens() as $item) {
    print 'Item: ' . $item->getDescription() . "<br>\n";}
