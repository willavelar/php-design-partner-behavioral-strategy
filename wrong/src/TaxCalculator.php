<?php

namespace DesignPattern\Wrong;

class TaxCalculator
{
    public function calc(Budget $budget, string $taxName) : float
    {
        switch ($taxName) {
            case "ICMS":
                return $budget->value * 0.1;
            case "ISS":
                return $budget->value * 0.06;
        }
    }
}