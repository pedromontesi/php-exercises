<?php
// ...
require_once "App/Lib/PagSeguro/PagSeguroLibrary.php";
$paymentRequest = new PagSeguroPaymentRequest();
$paymentRequest->setCurrency("BRL");
// item
$item = new PagSeguroItem;
$item->setId( $product->id );
$item->setDescription( $product->description );
$item->setQuantity( $data->amount );
$item->setAmount( $product->price );
$paymentRequest->addItem($item);
// endreço
$address = new PagSeguroAddress;
$address->setPostalCode( $customer->postal );
$address->setStreet( $customer->address );
$address->setNumber( $customer->number );
$address->setDistrict( $customer->neighborhood );
$address->setCity( $customer->city );
$address->setState( $customer->state );
$paymentRequest->setShippingAddress($address);// cliente
$sender = new PagSeguroSender;
$sender->setName( trim($customer->name) );
$sender->setEmail( trim($customer->email) );
$paymentRequest->setSender($sender);
$paymentRequest->setRedirectUrl("$host/confirmation.html");
$credentials = new PagSeguroAccountCredentials($ini['account'],
$ini['token']);
$url = $paymentRequest->register($credentials);
// este é apenas um código não funcional, para exemplificar o facade.
