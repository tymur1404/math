<?php

namespace App\Services\Calculation;

class AbstractCalculationService implements CalculationServiceInterface
{
    public static function calculate(float $a, float $b, float $c): float
    {
        return 1.11;
    }

    protected static function factorial($n): float|int
    {
        if ($n <= 1) {
            return 1;
        }

        return $n * self::factorial($n - 1);
    }
}
