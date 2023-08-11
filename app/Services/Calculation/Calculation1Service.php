<?php

namespace App\Services\Calculation;

class Calculation1Service extends AbstractCalculationService
{
    public static function calculate(float $a, float $b, float $c): float
    {
        $factorialA = self::factorial($a);
        $factorialB = self::factorial($b);

        $factorialProduct = self::factorial($c * $a);
        $sqrtFactorialProduct = sqrt($factorialProduct);

        return round($factorialA * $factorialB ** $c * $sqrtFactorialProduct, 2);
    }
}
