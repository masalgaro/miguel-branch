<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'national_id' => 'required|numeric',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'role' => 'required|max:255',
            'phone_number' => 'required|numeric',
            'birthday' => 'required|date',
            'address' => 'required|max:500',
        ];
    }
}
