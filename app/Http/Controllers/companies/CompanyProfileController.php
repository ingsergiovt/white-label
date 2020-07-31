<?php

namespace App\Http\Controllers\companies;

use App\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CompanyProfileController extends Controller
{
    public function index(){
        $user = auth()->user();
        $company = $user->company;
        return view('companies.profile.index', compact('company'));
    }

    public function update(Request $request, Company $company){

        if(!$company->slug_form){
            $code = $random = Str::random(10);
            $slug = $code;
        }else{
            $slug = $company->slug_form;
        }

        $company->update([
            'phone'         => request()->phone,
            'contact_phone' => request()->contact_phone,
            'slug_form'     => $slug
        ]);

        $company->user->update([
            'name' => request()->name
        ]);

        if(request()->file('logo')){
            $path = Storage::disk('public')->put('image', request()->file('logo'));
            $company->fill(['logo' => asset($path) ])->save();
        }

        $msg = 'Company has been updated successfully';
        return redirect()->route('company.profile')->with('success', $msg);
    }
}
