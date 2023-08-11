<?php

namespace App\Services\Calculation;

class Calculation2Service extends AbstractCalculationService
{
    public static function calculate(float $a, float $b, float $c): float
    {
        return round(sqrt($c * sqrt($b)) * ($a ** -$a), 2);
    }
}
