<?php

declare(strict_types=1);

namespace App\Http;

use App\Exceptions\NotFoundException;


class Router
{
    public function __construct(private array $routes)
    {
    }
    public function direct(string $uri): string
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new NotFoundException('No route defined for this URI.');
    }
}
