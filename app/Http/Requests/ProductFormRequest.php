<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
        'category_id'=>['required','integer'],
        'brand_id'=>['required','integer'],
        'name'=>['required','string'],
        'slug'=>['required','string'],
        'small_description'=>['nullable','string'],
        'description'=>['nullable','string'],
        'orignal_price'=>['required','integer','min:1'],
        'selling_price'=>['required','integer','min:1'],
        'quantity'=>['required','integer','min:1'],
        'meta_title'=>['nullable','string'],
        'meta_keyword'=>['nullable','string'],
        'meta_description'=>['nullable','string'],
        
       
        ];
    }
}
