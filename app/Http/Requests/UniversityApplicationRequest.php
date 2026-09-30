<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UniversityApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [

            'email' => 'required|email',

            'source' => 'required',

            'first_name' => 'required_without:last_name',

            'last_name' => 'required_without:first_name',

            'phone' => 'required_without:mobile',

            'programme' => 'required_without:course_name',

            'city' => 'nullable|string',

            'message' => 'nullable|string',

            'consent' => 'nullable',
        ];
    }
}
