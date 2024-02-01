<?php


declare(strict_types=1);

namespace Tests;

use App\Pokemon;
use PHPUnit\Framework\TestCase;
use App\Http\Router;
use App\Exceptions\NotFoundHttpException;


class RouterTest extends TestCase
{
    public function test_route_request(): void
    {
        $router = new Router([
            '/' => __DIR__ . '/controllers/pokedex.php',

        ]);

        $expectedResult = __DIR__ . '/controllers/pokedex.php';
        $actualResult = $router->direct('/');

        $this->assertSame($actualResult, $expectedResult);
    }

    public function test_route_not_found(): void
    {
        $router = new Router([
            '/' => __DIR__ . '/controllers/pokedex.php',

        ]);

        $this->expectException(NotFoundHttpException::class);
        $router->direct("/hehhe");
    }
}

//$uri = Request::uri();
