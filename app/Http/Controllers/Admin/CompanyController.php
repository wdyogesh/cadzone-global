<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Country;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $countries;
    public function __construct()
    {
        $this->countries = Country::pluck("name", "id");
        $this->middleware('auth');
    }

    //Company Controller for adding the company listing and view
    public function index()
    {
        $companies = Company::with(['state', 'country', 'city'])->get();
        return view('Admin.company.index', compact('companies'));
    }

    public function show(Company $company)
    {
        return view('admin.company.show', ['company' => $company]);
    }

    public function create()
    {
        $countries = $this->countries;
        return view('Admin.company.create', ['countries' => $countries]);
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company-list');
    }

    public function store(Request $request)
    {
        $this->validateMethod();
        $image = $request->file('company_logo');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('company_logo'), $new_name);

        Company::create([
            'name' => request('name'),
            'contact_person' => request('contact_person'),
            'office_contact' => request('office_contact'),
            'hr_contact' => request('hr_contact'),
            'country_id' => request('country'),
            'state_id' => request('state'),
            'city_id' => request('city'),
            'status' => request('status'),
            'address' => request('address'),
            'other_details' => request('other_details'),
            'company_logo' => $new_name,
        ]);
        return redirect()->route('company-list')->with('message', 'Company Details Stored Successfully !!');
    }

    public function edit(Company $company)
    {
        $countries = $this->countries;
        return view('admin.company.edit', compact('countries', 'company'));
    }

    public function update(Company $company, Request $request)
    {
        $this->validateMethod();
        if ($request->hasFile('company_logo')) {
            $image = $request->file('company_logo');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('company_logo'), $new_name);
            $company->update([
                'name' => request('name'),
                'contact_person' => request('contact_person'),
                'office_contact' => request('office_contact'),
                'hr_contact' => request('hr_contact'),
                'country_id' => request('country'),
                'state_id' => request('state'),
                'city_id' => request('city'),
                'status' => request('status'),
                'address' => request('address'),
                'other_details' => request('other_details'),
                'company_logo' => $new_name,
            ]);
        } else {
            $company->update([
                'name' => request('name'),
                'contact_person' => request('contact_person'),
                'office_contact' => request('office_contact'),
                'hr_contact' => request('hr_contact'),
                'country_id' => request('country'),
                'state_id' => request('state'),
                'city_id' => request('city'),
                'status' => request('status'),
                'address' => request('address'),
                'other_details' => request('other_details'),
            ]);
        }

        return redirect()->route('company-list')->with('message', 'Company Details Updated Successfully !!');
    }

    public function validateMethod()
    {
        return request()->validate([
            'name' => 'required|min:3|max:50',
            'contact_person' => 'required|min:10|max:11',
            'office_contact' => 'required|min:10|max:11',
            'hr_contact' => 'required|min:10|max:11',
            'address' => 'required|min:5|max:150',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'other_details' => 'required',
        ]);
    }

}
