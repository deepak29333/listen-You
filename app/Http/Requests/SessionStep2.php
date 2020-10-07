<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionStep2 extends FormRequest
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
            'time_zone'=>'required',
            'city_name'=>'required',
            'p_date'=>'required',
            'p_time'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'time_zone.required' => 'TimeZone is required!',
            'city_name.required' => 'City Name is required!',
            'p_date.required' => 'Preferred  Date is Required!',
            'p_time.required' => 'Preferred  Time is Required!',
        ];
    }
}
