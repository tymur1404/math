<?php

namespace App\Services\Calculation;

use App\Models\Calculation;
use App\Models\RequestParameter;
use App\Models\ServerResponse;
use Illuminate\Support\Facades\Auth;

class CalculationMainService
{
    private const START_CLASS = 1;
    private const END_CLASS = 3;

    public const STATUS_CREATED = 'Created';
    public const STATUS_ERROR = 'Error';
    public const RANK_HIGH = 'High';
    public const RANK_MIDDLE = 'Middle';
    public const RANK_LOW = 'Low';

    private array $services = [];

    public function __construct()
    {
        $this->services = [
            new Calculation1Service,
            new Calculation2Service,
            new Calculation3Service,
        ];
    }

    public function process(array $data): array
    {
        $calculation = Calculation::create(['user_id' => Auth::id()]);

        $this->createParameters($data, $calculation->id);

        $result = $this->getResultsFromAll($data);

        $this->createServerResponse($result, $calculation->id);

        return $result;
    }

    private function createParameters(array $data, int $calculationId): void
    {
        foreach ($data as $key => $value) {
            RequestParameter::create([
                'name' => $key,
                'value' => $value,
                'calculation_id' => $calculationId
            ]);
        }
    }

    private function getResultsFromAll(array $data): array
    {

        ['a' => $a, 'b' => $b, 'c' => $c] = $data;

        $result = [];
        foreach ($this->services as $service)
        {
            $value = $service::calculate($a, $b, $c);
            $result[] = $value;
        }

        return $result;
    }

    private function createServerResponse(array $data, int $calculationId): void
    {

        $minValue = min($data);
        $maxValue = max($data);

        foreach ($data as $value) {

            if ($value === $minValue) {
                $rank = self::RANK_LOW;
            } elseif ($value === $maxValue) {
                $rank = self::RANK_HIGH;
            } else {
                $rank = self::RANK_MIDDLE;
            }

            ServerResponse::create([
                'value' => $value,
                'status' => self::STATUS_CREATED,
                'rank' => $rank,
                'calculation_id' => $calculationId
            ]);
        }
    }
}
