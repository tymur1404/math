<?php

namespace App\Http\Controllers;

use App\Http\Requests\Calculation\StoreRequest;
use App\Services\Calculation\CalculationMainService;
use Illuminate\Contracts\Support\Renderable;


class CalculateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(private readonly CalculationMainService $calculationService)
    {
        $this->middleware('auth');
    }

    public function index(): Renderable
    {
        return view('calculate.index');
    }

    public function store(StoreRequest $request): Renderable
    {
        $data = $request->validated();
        $values = $this->calculationService->process($data);

        return view('calculate.index', compact('values'));
    }
}
