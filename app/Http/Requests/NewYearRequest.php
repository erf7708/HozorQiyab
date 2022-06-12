<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewYearRequest extends FormRequest
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

        'date'=>['required','jdate'],
        'rights'=>['required','numeric'],
        'right_to_housing'=>['required','numeric'],
        'right_to_food'=>['required','numeric'],
        'child_allowance'=>['required','numeric'],
        'basis_of_daily'=>['required','numeric'],
        'daily_years'=>['required','numeric'],
        'dailyEid'=>['required','numeric'],
        'tax_tate'=>['required','numeric','between:0,99.99'],
        'leave'=>['required','numeric','between:1,31'],
        'number_of_days'=>['required','numeric','between:1,6'],
        'number_year'=>['required','numeric'],
        'insurance_percentage'=>['required','numeric','between:0,99.99'],
        'tax_calculation_limit'=>['required','numeric'],
        'extra_hours'=>['required','numeric'],
        'referral_overtime'=>['required','numeric',],
        'right_shift'=>['required','numeric','between:0,99.99'],
        'shift_work'=>['required','numeric','between:0,99.99'],
        'route'=>['required','numeric']
        ];
    }
}
