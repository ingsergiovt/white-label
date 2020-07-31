<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteFormProfileRequest extends FormRequest
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
            'first_name'                => 'required',
            'lastname'                  => 'required',
            'street'                    => 'required',
            'city'                      => 'required',
            'state'                     => 'required',
            'zipvehicle'                => 'required',
            'email'                     => 'required',
            'homephone_cod1'            => 'required',
            'homephone_cod2'            => 'required',
            'homephone_cod3'            => 'required',
            'workphone_cod1'            => 'required',
            'workphone_cod2'            => 'required',
            'workphone_cod3'            => 'required',
            'workphone_cod_ext'         => 'required',
            'insurance_carrier'         => 'required',
            'insurance_with_carrier'    => 'required',
            'policy_month'              => 'required',
            'policy_day'                => 'required',
            'policy_year'               => 'required',
            'number_licensed_drivers'   => 'required',
            'number_vehicles'           => 'required',
        ];
    }
}
