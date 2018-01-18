<?php

require_once __DIR__.'/../../../config/bootstrap.php';

$className = $argv[1];
$classFixtures = sprintf('\\App\\DataFixtures\\%sFixtures', ucfirst($className));
$objectFixtures = new $classFixtures;
$objectFixtures->loadFixtures();