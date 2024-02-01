<?php


declare(strict_types=1);

namespace Tests;

use App\Pokemon;
use PHPUnit\Framework\TestCase;



class PokemonTest extends TestCase
{

    public function test_create_pokemon(): void
    {
        $pokemon = new Pokemon(1, 'Charizard');
        $this->assertSame(1, $pokemon->id);
        $this->assertSame('Charizard', $pokemon->name);
        $this->assertSame("https://img.pokemondb.net/sprites/bank/normal/charizard.png", $pokemon->getImageUrl());
    }
}
