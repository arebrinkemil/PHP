<?php


declare(strict_types=1);

class Channel
{

    private string $name;
    private string $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;

        if ($type !== 'text' && $type !== 'voice') {
            throw new Exception("Invalid channel type [$type].");
        }

        $this->type = $type;
    }
}
