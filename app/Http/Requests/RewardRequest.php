<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RewardRequest extends FormRequest
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
            'staff_id'=>['required','string'],
            'date'=>['required','jdate'],
            'reward'=>['required','string'],
            'amount'=>['required','string'],
            'description'=>['required','string']
        ];
    }
}
