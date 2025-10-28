<?php
$ps = new PagSeguroFacade('BRL'); // chamada à Facade
$product = new stdClass;
$product->id = 5;
$product->description = 'Pendrive';
$product->price = 10;
