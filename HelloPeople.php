<?php

require_once __DIR__ . '/vendor/autoload.php';

use XsX\Data\People;

$people = new People("Agung");

echo $people->sayHello("XsX") . PHP_EOL;