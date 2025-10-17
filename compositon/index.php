<?php
require_once "Product.class.php";
require_once "Characteristic.class.php";

$p1 = new Product('Chocolate', 10, 7);

$p1->addCharacteristic('Color', 'White');
$p1->addCharacteristic('Peso', '2.6Kg');
$p1->addCharacteristic( 'Potência', '20 watts RMS' );


print 'Produto: ' . $p1->getDescription() . "<br>\n";
foreach ($p1->getCharacteristics() as $c) {
    print ' Característica: ' . $c->getName() . ' - ' . $c->getValue()
        . "<br>\n";
}
