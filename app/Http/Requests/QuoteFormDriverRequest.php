<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteFormDriverRequest extends FormRequest
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
            'accidents'               => 'required',
            'age_first_licensed'      => 'required',
            'birth_day'               => 'required',
            'birth_month'             => 'required',
            'birth_year'              => 'required',
            'current_license_status'  => 'required',
            'driver_license'          => 'required',
            // 'dui_dwi_7_years'         => 'required',
            // 'license_suspended'       => 'required',
            // 'license_revoked'         => 'required',
            // 'require_sr22'            => 'required',
            'first_name'              => 'required',
            'issued_in'               => 'required',
            'lastname'                => 'required',
            'marital_status'          => 'required',
            'occupation'              => 'required',
            'primary_vehicle'         => 'required',
            'rate_credit'             => 'required',
            'relationship'            => 'required',
            // 'sex'                     => 'required',
            'ssn'                     => 'required',
            'violations'              => 'required',
            'years_currente_employer' => 'required',
            'years_license_co'        => 'required',
            'years_license_us'        => 'required',
            // 'driver_form'             => 'required'
        ];
    }
}
