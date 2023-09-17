<?php

use DesignPattern\Right\Tax\Icms;
use DesignPattern\Right\Tax\Iss;
use DesignPattern\Right\TaxCalculator;
use DesignPattern\Right\Budget;

require "vendor/autoload.php";

$calculator = new TaxCalculator();
$budget =  new Budget();
$budget->value = 100;

echo "Value : ".$budget->value . PHP_EOL;
echo "with tax ICMS : ".$calculator->calc($budget, new Icms()) . PHP_EOL;
echo "with tax ISS : ".$calculator->calc($budget, new Iss()) . PHP_EOL;