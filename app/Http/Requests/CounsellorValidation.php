<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounsellorValidation extends FormRequest
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
            'half_hour_amt'=>'required',
            'one_hour_amt'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'half_hour_amt.required' => 'Half Hour Payment  is required!',
            'f_name.required' => 'Full Name is required!',
            'one_hour_amt.required' => 'One hour Payment  is required!',
            'email.required' => 'Email id is required!'

        ];
    }
}
