<?php

require 'vendor/autoload.php';
session_start();

$products = [];
$products[] = new App\Product('banan', 12.99, 4);
$products[] = new App\Product('äpple', 14.99, 2);
$products[] = new App\Product('gurka', 2.99, 1);
$products[] = new App\Product('apelsin', 62.99, 7);
$products[] = new App\Product('blå banan', 72.99, 8);

$shoppingCart = new App\Cart($products);
$_SESSION["cart"] = $shoppingCart->getCart();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['product_name'];
    foreach ($products as $product) {
        if ($product->getName() === $productName) {
            $shoppingCart->addToCart($product);
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <h1>products</h1>
        <ul>
            <form <?php foreach ($products as $product) : ?> <li>
                <?= $product->getName() ?>
                <?= $product->getPrice() ?>kr
                <?= $product->getQuantity() ?>st
                <form method="POST">
                    <input type="hidden" name="product_name" value="<?= $product->getName() ?>">
                    <button type="submit">Add to cart</button>
                </form>
                </li>
            <?php endforeach; ?>

    </div>

    <div>
        <h1>Cart</h1>
        <ul>


            <?php foreach ($_SESSION["cart"] as $item) : ?>
                <li>
                    <?= $item->getName() ?>
                </li>


                <<form method="POST">
                    <input type="hidden" name="delete_name" value="<?= $product->getName() ?>">
                    <button type="submit">Remove</button>
                    </form>
                    </li>
                <?php endforeach; ?>



    </div>

</body>

</html> -->