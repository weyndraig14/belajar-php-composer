<?php

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \XsX\Belajar\Customer("Agung");

echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Vior") . PHP_EOL;
