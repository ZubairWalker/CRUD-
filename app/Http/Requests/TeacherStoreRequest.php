<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
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
        return [
            'name' => 'required|min:5|max:20',
            'email' => 'required|unique:teachers',
            'phone' => 'required|unique:teachers',
            'address' => 'required',
        ];
    }

    public function message(): array {
        return [
            'name.required' => 'ism kiritilmadi',
            'name.min' => 'ism kamida 5 ta harfdan iborat bo`lishi kerak',
            'name.max' => 'ism ko`pi bilan 20 ta harfdan iborat bo`lishi kerak',
            'email.required' => 'email kiritilmadi',
            'email.unique' => 'email allaqachon mavjud',
            'phone.required' => 'telefon kiritilmadi',
            'phone.unique' => 'telefon allaqachon mavjud',
            'address.required' => 'address kiritilmadi',
        ];
    }
}
