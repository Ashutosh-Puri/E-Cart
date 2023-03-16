<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id'=>['required','integer'],
            'name'=>['required','string'],
            'slug'=>['required','string'],
        ];
    }
}
