<?php

require 'vendor/autoload.php';


$products = [];
$products[] = new App\Product('banan', 12.99, 10);
$products[] = new App\Product('äpple', 14.99, 2);
$products[] = new App\Product('gurka', 2.99, 1);
$products[] = new App\Product('apelsin', 62.99, 7);

// $products[] = new App\PhysicalProduct('blå banan', 72.99, 8, 'www.google.com');




$shoppingCart = new App\Cart();



$shoppingCart->addToCart($products[0]);
$shoppingCart->addToCart($products[0]);

$shoppingCart->addToCart($products[1]);
$shoppingCart->addToCart($products[3]);

$shoppingCart->addToCart($products[2]);
$shoppingCart->addToCart($products[2]);
$shoppingCart->addToCart($products[2]);
$shoppingCart->addToCart($products[2]);

echo "Products:\n";
foreach ($products as $product) {
    echo $product->getName() . ", " . $product->getPrice() . ", " . $product->getQuantity() . "\n";
}

echo "<br>Cart:<br>";
echo "\nCart:\n";
foreach ($shoppingCart->getCart() as $product) {
    echo $product->getName() . ", " . $product->getPrice() . ", " . $product->getQuantity() . "\n";
}
