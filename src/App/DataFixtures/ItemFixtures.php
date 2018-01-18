<?php

namespace App\DataFixtures;

class ItemFixtures extends BaseFixtures
{
    public function getType()
    {
        return 'item';
    }

    public function getFixtures()
    {
        return [
            [
              'title' => 'Agricola',
              'author' => 'Uwe Rosenberg',
              'editor' => 'Lookout Games',
              'published' => '2007'
            ],[
              'title' => 'Puerto Rico',
              'author' => 'Andreas Seyfarth',
              'editor' => 'alea',
              'published' => '2002'
            ]
        ];
    }
}