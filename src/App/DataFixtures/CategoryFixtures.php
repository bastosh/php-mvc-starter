<?php

namespace App\DataFixtures;

use App\Model\CategoryRepository;

class CategoryFixtures extends BaseFixtures
{
    public function getType()
    {
        return CategoryRepository::TYPE;
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