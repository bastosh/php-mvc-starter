<?php

namespace App\Model;

class UserRepository extends BaseRepository
{
    const TYPE = 'user';

    public function getType()
    {
        return self::TYPE;
    }

}