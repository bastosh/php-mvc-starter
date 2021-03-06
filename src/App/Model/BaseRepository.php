<?php

namespace App\Model;

use RedBeanPHP\R;

abstract class BaseRepository
{
    abstract function getType();

    public function create($data)
    {
        $object = R::dispense($this->getType());

        foreach ($data as $property => $value) {
            $object->$property = $value;
        }

        R::store($object);
    }
}