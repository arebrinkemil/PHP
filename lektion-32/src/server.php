<?php

declare(strict_types=1);

class Server
{
    public $name;
    public $channels;

    public function __construct($name, $channels = [])
    {
        $this->name = $name;
        $this->channels = $channels;
    }
}
