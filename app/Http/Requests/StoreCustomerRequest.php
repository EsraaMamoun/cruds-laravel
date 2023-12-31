<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
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
            "name" => ["required","string"],
            "email" => ["required","email"],
            "type" => ["required", Rule::in(["I", "B", "i", "b"])],
            "city" => ["required","string"],
            "address" => ["required","string"],
            "state" => ["required","string"],
            "postal_code" => ["required","string"],
        ];
    }
}
