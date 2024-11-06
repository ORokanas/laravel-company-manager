<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $companies = Company::where('user_id', $id)->get();
        // dump($companies);
        // dd($id,$companies);
        return view('company', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            //'user_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
        ]);

        $formFields['user_id'] = Auth::user()->id;

        Company::create($formFields);

        return redirect('/company');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('company.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $formFields = $request->validate([
            //'user_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'website' => ['required'],
            'email' => ['required','email'],
        ]);

        $formFields['user_id'] = Auth::user()->id;

        $company = Company::findOrFail($company->id);

        $company->update($formFields);

        return redirect('/company');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect('/company');
    }

    public function search(Company $company){
        return view('company.search');
    }
}
