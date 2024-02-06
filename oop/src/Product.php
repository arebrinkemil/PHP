<?php

declare(strict_types=1);

namespace App;

class Product
{
    public function __construct(
        private string $name,
        private float $price,
        private int $quantity
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
}


class PhysicalProduct extends Product
{
    public function __construct(
        private string $url,
    ) {
    }
}

class DigitalProduct extends Product
{
    public function __construct(
        private int $volume,
        private int $weight,
    ) {
    }
}
