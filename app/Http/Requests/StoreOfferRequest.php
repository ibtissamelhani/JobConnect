<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfferRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'title' => 'required|string|max:255',
            'contract' => 'required|string|max:255',
            'min_salary' => 'required|numeric',
            'max_salary' => 'required|numeric',
            'duration' => 'required|integer|min:1',
            'period' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'city_id' => 'required|exists:cities,id',
            'domain_id' => 'required|exists:domains,id',
        ];
    }
}
