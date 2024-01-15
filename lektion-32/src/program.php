<?php

declare(strict_types=1);

class Program
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
