<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Counsellor extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'f_name'=>'required',
            'email'=>'email|required',
            'days[]'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'f_name.required' => 'First Name is required!',
            'days[].required' => 'Please Select available Days!'
        ];
    }
}
