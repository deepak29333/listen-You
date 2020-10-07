<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sessionStep1 extends FormRequest
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
            'mobile_no'=>'required|min:10',
            'email'=>'email|required',
            'gender'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'f_name.required' => 'First Name is required!',
            'gender.required' => 'Please Select Gender!',
            'mobile_no.required' => 'Mobile Number is Required!',
            'mobile_no.min' => 'Mobile Number is Not Correct!'
        ];
    }
}
