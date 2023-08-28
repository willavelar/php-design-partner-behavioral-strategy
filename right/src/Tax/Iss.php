<?php

namespace DesignPattern\Right\Tax;

use DesignPattern\Right\Budget;

class Iss implements Tax
{
    public function calculateTax(Budget $budget) : float
    {
        return $budget->value * 0.06;
    }
}