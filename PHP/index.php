<?php

require_once('Car.php');
require_once('UberX.php');
require_once('UberPool.php');
required_once('UberVan.php')
require_once('Account.php');

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();