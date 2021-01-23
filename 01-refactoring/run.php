<?php

require 'vendor/autoload.php';

// define customer
$customer = new Refactoring\Customer('Jesus LC');
// choose movie to be rented, define rental, add it to the customer
$movie = new Refactoring\Movie('Forrest Gump', 0);
$rental = new Refactoring\Rental($movie, 1);
$customer->addRental($rental);
// choose 2nd movie to be rented, define rental, add it to the customer
$movie = new Refactoring\Movie('Spiderman', 1);
$rental = new Refactoring\Rental($movie, 2);
$customer->addRental($rental);
// print the statement
echo $customer->statement();