<?php

namespace App\Model;

class ItemRepository extends BaseRepository
{
    const TYPE = 'item';

    public function getType()
    {
        return self::TYPE;
    }

}