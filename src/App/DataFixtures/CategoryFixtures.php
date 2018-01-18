<?php

namespace App\DataFixtures;

class CategoryFixtures extends BaseFixtures
{
    public function getType()
    {
        return 'category';
    }

    public function getFixtures()
    {
        return [
            ['name' => 'boardgame'],
            ['name' => 'book'],
            ['name' => 'cd'],
            ['name' => 'dvd']
        ];
    }
}