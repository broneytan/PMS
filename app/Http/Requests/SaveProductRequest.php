<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
    public function rules(): array
    {
        if($this->isMethod('patch') || $this->isMethod('put')){
            $photoRules =
            'nullable|image|mimes:jpg,jpeg,png,gif|max:5048';

        }
        else{
            $photoRules =
            'required|image|mimes:jpg,jpeg,png,gif|max:5048';
        }
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:3000',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'photo' => $photoRules, 
        ];
    }
}
