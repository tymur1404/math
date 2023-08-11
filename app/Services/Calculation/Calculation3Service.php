<?php

namespace App\Services\Calculation;

class Calculation3Service extends AbstractCalculationService
{
    public static function calculate(float $a, float $b, float $c): float
    {
        $powerCB = $c ** $b;
        $factorialCA = self::factorial($c * $a);

        return round(($a * $powerCB) / $factorialCA, 2);
    }
}
