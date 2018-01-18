<?php
/**
 * Created by PhpStorm.
 * User: bastoche
 * Date: 18/01/2018
 * Time: 17:49
 */

namespace App\DataFixtures;

use RedBeanPHP\R;

abstract class BaseFixtures
{
    public function loadFixtures()
    {
        $type = $this->getType();
        $fixtures = $this->getFixtures();
        foreach ($fixtures as $fixture) {
            $object = R::dispense($type);
            foreach ($fixture as $property => $value) {
                $object->$property = $value;
            }
            R::store($object);
        }
    }
}