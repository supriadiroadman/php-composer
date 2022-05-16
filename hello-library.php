
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Supriadi\Belajar\Customer;

$customer = new Customer("Supriadi");

echo $customer->sayHello("Budi").PHP_EOL;
echo $customer->sayHello().PHP_EOL;
?>