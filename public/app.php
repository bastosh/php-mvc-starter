<?php
require_once __DIR__.'/../config/bootstrap.php';

use RedBeanPHP\R;

/**
 * @var $item \App\Model\Item
 */
$item = R::dispense('item');
$item->title = 'Agricola';
R::store($item);