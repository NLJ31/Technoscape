<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTechnoConferenceUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'input-proof' => [
                'required',
                'max:4048',
            ],
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'input-proof.required' => 'The input proof is required.',
            'input-proof.max' => 'The input proof may not be greater than 4048 kilobytes.',
        ];
    }

    public function validationData()
    {
        // Adjust the request method here
        $this->merge(['_method' => 'PUT']);

        return parent::validationData();
    }
}
