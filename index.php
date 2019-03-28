<?php 
require('vendor/autoload.php');

use Linio\Linianos;

$linianos = new Linianos();
$numbers = $linianos->getNumbers();

foreach ($numbers as $index => $number) {
    echo $number . PHP_EOL;
}