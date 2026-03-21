<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceLineRequest extends FormRequest
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
            'unit_price' => 'required|integer|min:1',
            'discount' => 'required|numeric|gte:0|lte:1',
            'quantity' => 'required|integer|min:1',
            'reason' => 'nullable|max:255',
            'phone_id' => 'required|exists:phones,id',
        ];
    }
}
