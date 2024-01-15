<?php

declare(strict_types=1);
class person
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
