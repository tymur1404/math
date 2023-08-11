<?php

namespace App\Services\Calculation;

interface CalculationServiceInterface
{
    public static function calculate(float $a, float $b, float $c): float;
}
