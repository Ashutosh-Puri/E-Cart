<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>['required','string'],
            'slug'=>['required','string'],
            'desciption'=>['nullable','string',],
            'meta_title' =>['nullable','string',],
            'meta_keyword' =>['nullable','string',],
            'meta_desciption'=>['nullable','string',], 
            'icon'=>['nullable'],
        ];
    }
}
