<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sessionstep3 extends FormRequest
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
                'counsellor_id'=>'required',
                'hourtime'=>'required',
                'time'=>'required',
                // 'day'=>'required',
                'p_date'=>'required|date'
                //'p_date'=>'required|date|after:today'
        ];
    }
    public function messages()
    {
        return [
            'counsellor_id.required' => 'Counsellor Name is required!',
            'hourtime.required' => 'Please Select Your Time Duration',
            'time.required' => 'Please Select Your Time',
            // 'day.required' => 'Please Select Your Day.',
            'p_date.required'=>'Please select Your Session Date',
            // 'p_date.after'=>'You Can select Only Feature Date'
        ];
    }
}
