<?php


declare(strict_types=1);

namespace Tests;

use App\Pokemon;
use PHPUnit\Framework\TestCase;
use App\Http\Request;


class RequestTest extends TestCase
{
    public function test_get_uri(): void
    {
        $_SERVER['REQUEST_URI'] = '/example';

        $uri = Request::uri();

        $this->assertEquals('/example', $uri);
    }
}
