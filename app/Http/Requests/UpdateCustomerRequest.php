<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
        $method = $this->method();
        if ($method === 'PUT') {
            return [
                'name' => 'required|string|max:255',
                'type' => 'required|string|max:255|in:I,C',
                'email' => 'required|email|unique:customers,email,' . $this->route('customer')->id,
                'address' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'state' => 'required|string|max:255',
                'postal_code' => 'required|string|max:20',
                'phone' => 'required|string|max:20',
            ];
        } elseif ($method === 'PATCH') {
            return [
                'name' => 'sometimes|required|string|max:255',
                'type' => 'sometimes|required|string|max:255|in:I,C',
                'email' => 'sometimes|required|email|unique:customers,email,' . $this->route('customer')->id,
                'address' => 'sometimes|required|string|max:255',
                'city' => 'sometimes|required|string|max:255',
                'state' => 'sometimes|required|string|max:255',
                'postal_code' => 'sometimes|required|string|max:20',
                'phone' => 'sometimes|required|string|max:20',
            ];
        }
    }
}
