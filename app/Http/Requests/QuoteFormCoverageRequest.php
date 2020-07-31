<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteFormCoverageRequest extends FormRequest
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
            'bi'            => 'required',
            'pd'            => 'required',
            // 'coll'          => 'required',
            // 'comp'          => 'required',
            // 'medpm'         => 'required',
            // 'umbi'          => 'required',
            // 'umpd'          => 'required',
        ];
    }
}
