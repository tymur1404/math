<?php

namespace App\Http\Requests\Calculation;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'a' => 'required|numeric|min:0.01|max:10',
            'b' => 'required|numeric|min:0.01|max:10',
            'c' => 'required|numeric|min:0.01|max:10',
        ];
    }
}
