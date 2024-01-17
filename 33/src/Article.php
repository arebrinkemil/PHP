<?php

declare(strict_types=1);



namespace App;

use App\Support\Str;

class Article
{

    public string $slug;
    public function __construct(public string $title, public string $content, public \DateTime $date, public Author $author)
    {
        $this->slug = Str::kebabCase($this->title);
    }

    public function getExcerpt($numberOfWords): string
    {
        $words = explode(' ', $this->content);
        $excerpt = '';
        for ($i = 0; $i < $numberOfWords; $i++) {
            if (isset($words[$i])) {
                $excerpt .= $words[$i] . ' ';
            }
        }
        return $excerpt;
    }
}
