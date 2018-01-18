<?php
require_once __DIR__.'/../config/bootstrap.php';

$dispatcher = new \App\Services\Dispatcher();
$dispatcher->dispatch();