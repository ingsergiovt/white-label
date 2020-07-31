<?php

namespace App\Http\Controllers;

use App\User;
use App\Quote;
use App\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\QuoteFormProfileRequest;
use App\Http\Requests\QuoteFormVehicleRequest;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $quotes = Quote::get();
        return view('quote.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug = false)
    {
        if($slug){
            $company = Company::where('slug_form', $slug)->first();
            return view('quote.create', compact('company'));
        }
        return view('quote.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_profile(QuoteFormProfileRequest $request)
    {

        // return request()->all();

        if(request()->form_code){

            $quote = Quote::where('code', request()->form_code)->first();
            // return $quote;

            // return request()->form_code;

            // $quote->update([request()->all()]);

            $quote->update([

                'city'                      => request()->city,
                'email'                     => request()->email,
                'first_name'                => request()->first_name,
                'homephone_cod1'            => request()->homephone_cod1,
                'homephone_cod2'            => request()->homephone_cod2,
                'homephone_cod3'            => request()->homephone_cod3,
                'insurance_carrier'         => request()->insurance_carrier,
                'insurance_with_carrier'    => request()->insurance_with_carrier,
                'lastname'                  => request()->lastname,
                'middlename'                => request()->middlename,
                'number_licensed_drivers'   => request()->number_licensed_drivers,
                'number_vehicles'           => request()->number_vehicles,
                'other_carrier'             => request()->other_carrier,
                'other_insurance_carrier'   => request()->other_insurance_carrier,
                'policy_day'                => request()->policy_day,
                'policy_month'              => request()->policy_month,
                'policy_year'               => request()->policy_year,
                'promo_code'                => request()->promo_code,
                'recidence_type'            => request()->recidence_type,
                'refered'                   => request()->refered,
                'state'                     => request()->state,
                'street'                    => request()->street,
                'workphone_cod1'            => request()->workphone_cod1,
                'workphone_cod2'            => request()->workphone_cod2,
                'workphone_cod3'            => request()->workphone_cod3,
                'workphone_cod_ext'         => request()->workphone_cod_ext,
                'zipvehicle'                => request()->zipvehicle,

            ]);


            return response()->json([
                'success' => true,
                'code' => $quote->code,
            ]);

        }else{
            // return 'fine';
            $code_form = Str::random(8);
            $quote = Quote::create([
                'city'                      => request()->city,
                'email'                     => request()->email,
                'first_name'                => request()->first_name,
                'homephone_cod1'            => request()->homephone_cod1,
                'homephone_cod2'            => request()->homephone_cod2,
                'homephone_cod3'            => request()->homephone_cod3,
                'insurance_carrier'         => request()->insurance_carrier,
                'insurance_with_carrier'    => request()->insurance_with_carrier,
                'lastname'                  => request()->lastname,
                'middlename'                => request()->middlename,
                'number_licensed_drivers'   => request()->number_licensed_drivers,
                'number_vehicles'           => request()->number_vehicles,
                'other_carrier'             => request()->other_carrier,
                'other_insurance_carrier'   => request()->other_insurance_carrier,
                'policy_day'                => request()->policy_day,
                'policy_month'              => request()->policy_month,
                'policy_year'               => request()->policy_year,
                'promo_code'                => request()->promo_code,
                'recidence_type'            => request()->recidence_type,
                'refered'                   => request()->refered,
                'state'                     => request()->state,
                'street'                    => request()->street,
                'workphone_cod1'            => request()->workphone_cod1,
                'workphone_cod2'            => request()->workphone_cod2,
                'workphone_cod3'            => request()->workphone_cod3,
                'workphone_cod_ext'         => request()->workphone_cod_ext,
                'zipvehicle'                => request()->zipvehicle,
                'company_id'                => request()->company_id,
                'code'                      => $code_form,
                'profile_form'              => true
            ]);

            return response()->json([
                'success' => true,
                'code' => $code_form
            ]);
        }


    }

    public function store_vehicle(QuoteFormVehicleRequest $request)
    {

        if(request()->form_code){
            // return request()->all();

            $quote = Quote::where('code', request()->form_code)->first();

            $quote->update([
                'vehicle_anual_milage'  => request()->vehicle_anual_milage,
                'vehicle_body_type'     => request()->vehicle_body_type,
                'vehicle_category'      => request()->vehicle_category,
                'vehicle_cylinders'     => request()->vehicle_cylinders,
                'vehicle_damage'        => request()->vehicle_damage,
                'vehicle_miles_work'    => request()->vehicle_miles_work,
                'vehicle_number_id'     => request()->vehicle_number_id,
                'vehicle_use'           => request()->vehicle_use,
                'vehicle_wheel_drive'   => request()->vehicle_wheel_drive,
                'vehicle_year'          => request()->vehicle_year,
                'vehicle_make'          => request()->vehicle_make,
                'vehicle_model'         => request()->vehicle_model,
                'vehicle_from'          => true
            ]);

            // return $quote;

            return response()->json([
                'success' => true,
            ]);
        }


    }

    public function store_driver(Request $request)
    {

        // return request()->all();

        if(request()->form_code){
            // return request()->all();
            $quote = Quote::where('code', request()->form_code)->first();
            // return $quote;
            // return request()->except(['_token', 'form_code']);
            $quote->update([

                'accidents'               => request()->accidents,
                'age_first_licensed'      => request()->age_first_licensed,
                'birth_day'               => request()->birth_day,
                'birth_month'             => request()->birth_month,
                'birth_year'              => request()->birth_year,
                'current_license_status'  => request()->current_license_status,
                'driver_license'          => request()->driver_license,
                'dui_dwi_7_years'         => request()->dui_dwi_7_years,
                'dui_dwi_10_years'        => request()->dui_dwi_10_years,
                'license_suspended'       => request()->license_suspended,
                'first_name'              => request()->first_name,
                'issued_in'               => request()->issued_in,
                'lastname'                => request()->lastname,
                'license_revoked'         => request()->license_revoked,
                'marital_status'          => request()->marital_status,
                'middlename'              => request()->middlename,
                'occupation'              => request()->occupation,
                'primary_vehicle'         => request()->primary_vehicle,
                'rate_credit'             => request()->rate_credit,
                'relationship'            => request()->relationship,
                'require_sr22'            => request()->require_sr22,
                'sex'                     => request()->sex,
                'ssn'                     => request()->ssn,
                'violations'              => request()->violations,
                'years_currente_employer' => request()->years_currente_employer,
                'years_license_co'        => request()->years_license_co,
                'years_license_us'        => request()->years_license_us,
                'driver_form'             => true

             ]);

            // return $quote;

            return response()->json([
                'success' => true,
            ]);

        }

    }

    public function store_quote(Request $request)
    {

        // return request()->all();

        if(request()->form_code){

            $quote = Quote::where('code', request()->form_code)->first();
            // return $quote;
            // return request()->except(['_token', 'form_code']);
            $quote->update([

                'bi'            => request()->bi,
                'coll'          => request()->coll,
                'comp'          => request()->comp,
                'medpm'         => request()->medpm,
                'pd'            => request()->pd,
                'umbi'          => request()->umbi,
                'umpd'          => request()->umpd,
                'coverage_form' => true

             ]);

            // return $quote;

            return response()->json([
                'success' => true,
            ]);

        }

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $quote = Quote::where('code', $code)->first();
        return view('quote.show', compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $validate = $request->validate([
            'code' => 'required',
        ]);
        // return request()->all();
        $quote = Quote::where('code', request()->code)->first();
        // return $quote;
        if(!$quote){
            return back()->with('message', 'Code Invalid');
        }
        // return request()->code;
        return view('quote.edit', compact('quote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
