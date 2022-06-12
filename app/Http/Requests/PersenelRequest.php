<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersenelRequest extends FormRequest
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
            'StaffId'=>['required','numeric'],
            'firstName'=>['required','string','min:3','max:30'],
            'lastName'=>['required','string','min:3','max:30'],
            'fatherName'=>['required','string','min:3','max:30'],
            'code'=>['required','numeric'],
            'numberSh'=>['required','numeric'],
            'countChildren'=>['required','numeric','min:1','max:7'],
            'phone'=>['required','numeric'],
            'insurance_number'=>['required','numeric'],
            'account_number'=>['required','numeric'],
            'job'=>['required','string'],
            'start_at'=>['required','jdate','before:end_at'],
            'end_at'=>['required','jdate','after::start_at']

        ];
    }
}
