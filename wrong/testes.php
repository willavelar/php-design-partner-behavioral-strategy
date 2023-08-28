<?php

use DesignPattern\Wrong\TaxCalculator;
use DesignPattern\Wrong\Budget;

require "../vendor/autoload.php";

$calculator = new TaxCalculator();
$budget =  new Budget();
$budget->value = 100;

echo "Value : ".$budget->value . PHP_EOL;
echo "with tax ICMS : ".$calculator->calc($budget, 'ICMS') . PHP_EOL;
echo "with tax ISS : ".$calculator->calc($budget, 'ISS') . PHP_EOL;
echo "with tax MVA : ".$calculator->calc($budget, 'MVA') . PHP_EOL;