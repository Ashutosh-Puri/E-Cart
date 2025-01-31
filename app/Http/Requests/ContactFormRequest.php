<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'name'=>['required','string'],
            'phone'=>['required','integer','digits:10'],
            'email'=>['required','string','email'],
            'subject'=>['required','string'],
            'message'=>['required','string'],
        ];
    }
}
