<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhoneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'memory' => 'required|max:50',
            'ram' => 'required|max:20',
            'battery' => 'required|max:20',
            'brand' => 'required|max:50',
            'quantity' => 'required|integer|gte:0',
        ];
    }
}
