<?php

namespace App\Model;

use RedBeanPHP\SimpleModel;

abstract class BaseModel extends SimpleModel
{
    public $slug;
    public $created;
    public $updated;
}