<?php

namespace App\Http\Controllers;

use App\User;
use App\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companies = Company::with('user')->get();
        return view('admin.companies.index', compact('companies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = new Company;
        return view('admin.companies.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return request()->all();

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required']
        ]);

        // $company_name = str_replace(' ', '-', request()->name);
        $code = $random = Str::random(10);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        // return $user;

        $user->company()->create([
            'phone'         => request()->phone,
            'contact_phone' => request()->contact_phone,
            // 'slug_form'     => $company_name."-".$code,
            'slug_form'     => $code,
        ]);

        if(request()->file('logo')){
            $path = Storage::disk('public')->put('image', request()->file('logo'));
            $user->company->fill(['logo' => asset($path) ])->save();
        }
        $user->assignRole('admin_company');


        $msg = 'Company has created updated successfully';
        return redirect()->route('admin.companies.index')->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->update([
            'phone'         => request()->phone,
            'contact_phone' => request()->contact_phone,
            'slug_form'     => request()->slug_form
        ]);
        $msg = 'Company has been updated successfully';
        return redirect()->route('admin.companies.index')->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        // return $company;
        $user = $company->user;

        $user->delete();
        $msg = 'Company has been deleted successfully';
        return redirect()->route('admin.companies.index')->with('success', $msg);
    }
}
