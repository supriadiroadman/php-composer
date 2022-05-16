<?php
// Setelah menambah package di composer.json
// lakukan composer update & composer dump-autoload
require_once __DIR__.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Supriadi');
$log->pushHandler(new StreamHandler('aplication.log', Logger::INFO));

// add records to the log
$log->info('Hello world');
$log->info('Selamat belajar composer');