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
        $this->products[] = $product;
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
