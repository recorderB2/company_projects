<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'title' => 'required|max:50',
            'image' => 'mimes:jpeg,png,bmp'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Missing Project Title',
            'title.max' => 'Title Is Very Long (max = 50)',
            'image.mimes' => 'Image Accept Types: jpeg,png,bmp',
        ];
    }
}
