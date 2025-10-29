<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepositRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'amount' => 'required|numeric|min:1',
            'currency' => 'required|string',
            //            'first_name' => 'required|string',
            //            'last_name' => 'required|string',
            //            'email' => 'required|email',
            //            'phone' => 'required|string',
            //            'address' => 'required|string',
            //            'city' => 'required|string',
            //            'country' => 'required|string',
            //            'zip' => 'required|string'
        ];
    }
}
