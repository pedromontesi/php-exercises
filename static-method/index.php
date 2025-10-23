<?php

require_once "Person.php";

$p1 = new Person('Carlos', 23);

echo $p1->getName() . PHP_EOL;

echo $p1->getAge() . PHP_EOL;

echo $p1->getId() . PHP_EOL;

print '--' . PHP_EOL;

$p2 = new Person('Maria', 19);

echo $p2->getName() . PHP_EOL;

echo $p2->getAge() . PHP_EOL;

echo $p2->getId() . PHP_EOL;
