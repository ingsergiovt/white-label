<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteFormVehicleRequest extends FormRequest
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
            'vehicle_year'          => 'required',
            'vehicle_make'          => 'required',
            'vehicle_model'         => 'required',
            'vehicle_number_id'     => 'required',
            'vehicle_anual_milage'  => 'required',
            'vehicle_use'           => 'required',
            'vehicle_miles_work'    => 'required',
            'vehicle_category'      => 'required',
            // 'vehicle_wheel_drive'   => 'required',
            'vehicle_body_type'     => 'required',
            'vehicle_cylinders'     => 'required',
            // 'vehicle_damage'        => 'required',
        ];
    }
}
