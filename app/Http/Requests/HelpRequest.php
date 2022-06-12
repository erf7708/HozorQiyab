<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'staff_id'=>['required','numeric'],
            'month'=>['required','string'],
            'year'=>['required','string'],
            'amount'=>['required','numeric'],
            'description'=>['required','string']
        ];
    }
}
