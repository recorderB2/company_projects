<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
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
            'email' => 'required|unique:subscribers|email',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => __('main.email.required'),
            'email.unique' => __('main.email.unique'),
            'email.email' => __('main.email.format'),
        ];
    }
}
