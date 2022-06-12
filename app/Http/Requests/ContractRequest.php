<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
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



        if(request()->routeIs('offers.store')){
            return [
                'name'=>['required','string'],
                'code'=>['numeric','required'],
                'row'=>['required','numeric'],
                'employer'=>['required','string','min:3','max:40'],
                'address'=>['required','string'],
                'start_at'=>['required','jdate','before:end_at'],
                'end_at'=>['required','jdate','after::start_at']
            ];
        }else{
            return [
                'name'=>['required','string'],
                'code'=>['numeric','required'],
                'row'=>['required','numeric'],
                'employer'=>['required','string','min:3','max:40'],
                'address'=>['required','string'],
                'start_at'=>['required','jdate','before:end_at'],
                'end_at'=>['required','jdate','after::start_at']
            ];
        }





    }
}
