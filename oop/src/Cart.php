<?php

declare(strict_types=1);

namespace App;

class Cart
{
    public array $products;
    public int $totalPrice;

    public function __construct(
        array $products = [],
        int $totalPrice = 0,
    ) {
        $this->products = $products;
        $this->totalPrice = $totalPrice;
    }

    public function getCart(): array
    {
        return $this->products;
    }

    public function addToCart($product): void
    {
        $found = false;
        foreach ($this->products as &$cartProduct) {
            if ($cartProduct->getName() === $product->getName()) {
                $cartProduct->setQuantity($cartProduct->getQuantity() + 1);
                $found = true;
                break;
            }
        }

        if (!$found) {
            $productClone = clone $product;
            $productClone->setQuantity(1);
            $this->products[] = $productClone;
        }

        $product->setQuantity($product->getQuantity() - 1);
    }
    public function removeProduct($product): void
    {
        foreach ($this->products as $key => $value) {
            if ($value === $product) {
                unset($this->products[$key]);
            }
        }
    }
}
