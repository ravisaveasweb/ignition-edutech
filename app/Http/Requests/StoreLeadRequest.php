<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'email', 'max:255'],

            'mobile' => ['required', 'string', 'regex:/^[0-9]{10}$/'],

            'enquiry_type' => [
                'nullable',
                'string',
                Rule::in([
                    'Counselling',
                    'Study India',
                    'Study Abroad',
                ]),
            ],
        ];
    }
}
