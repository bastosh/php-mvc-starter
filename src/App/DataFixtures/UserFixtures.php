<?php

namespace App\DataFixtures;

use App\Model\UserRepository;

class UserFixtures extends BaseFixtures
{
    public function getType()
    {
        return UserRepository::TYPE;
    }

    public function getFixtures()
    {
        return [
            [
            'firstname' => 'Sébastien',
            'lastname' => 'Pereda',
            'username' => 'Bastoche',
            'password' => 'root',
            'email' => 'bastoche@collectify.io'
            ],

            [
            'firstname' => 'Céline',
            'lastname' => 'Pereda',
            'username' => 'Linette',
            'password' => 'root',
            'email' => 'linette@collectify.io'
            ]
        ];
    }
}