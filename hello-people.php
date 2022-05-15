<?php

require_once __DIR__.'/vendor/autoload.php';

use Supriadi\Data\People;

$people = new People('Supriadi');
$people->sayHello("Budi");