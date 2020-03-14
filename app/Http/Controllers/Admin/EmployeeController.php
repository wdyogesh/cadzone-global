<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Employee;
use App\Models\UploadDocuments;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    //
    protected $countries;
    protected $blood_groups;
    protected $off_sides;
    protected $roles;

    public function __construct()
    {
        $this->countries = Country::pluck("name", "id");
        $this->middleware('auth');
        $this->blood_groups = ['O+', 'O-', 'A+', 'AB+', 'AB-', 'A-'];
        $this->roles = ['Employee' => '3', 'Hr' => '2'];
        $this->off_sides = ['Yes', 'No'];
    }

    // Employee Controller for index section.
    public function index()
    {
        # code...
        $employees = User::where('role', '3')->with('employee')->get();
        return view('admin.employee.index', compact('employees'));
    }

    public function hr()
    {
        # code...
        $employees = User::where('role', '2')->with('employee')->get();
        return view('admin.employee.hrList', compact('employees'));
    }

    public function create()
    {
        return view('admin.employee.create',
            [
                'countries' => $this->countries,
                'blood_groups' => $this->blood_groups,
                'off_sides' => $this->off_sides,
                'roles' => $this->roles,
            ]
        );
    }

    public function store(Request $request)
    {
        // return request('date_of_birth');
        DB::beginTransaction();

        try {
            request()->validate([
                'name' => 'required|min:3|max:100',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|max:12',
                'present_phone' => 'required|min:10|max:12',
                'perma_number' => 'required|min:10|max:12',
                'emer_contact' => 'required|min:10|max:12',
                'image' => 'required',
                'department' => 'required',
                'designation' => 'required',
                'off_on_side' => 'required',
                'date_of_birth' => 'required',
                'uan_no' => 'required',
                'esic_no' => 'required',
                'bank_number' => 'required',
                'ifsc_code' => 'required',
                'role' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'blood_group' => 'required',
                'curr_adddress' => 'required',
                'curr_country_id' => 'required',
                'curr_state_id' => 'required',
                'curr_city_id' => 'required',
                'curr_pin_code' => 'required',
                'perma_address' => 'required',
                'perma_country_id' => 'required',
                'perma_state_id' => 'required',
                'perma_city_id' => 'required',
                'perma_pin_code' => 'required',
            ]);

            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('user_images'), $new_name);
            $user = User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => Hash::make(request('password')),
                'present_phone' => request('present_phone'),
                'perma_number' => request('perma_number'),
                'role' => request('role'),
                'images' => $new_name,
            ]);

            $employee = Employee::create([
                'user_id' => $user->id,
                'employee_code' => 'CZ' . $user->id,
                'department' => request('department'),
                'designation' => request('designation'),
                'off_on_side' => request('off_on_side'),
                'date_of_birth' => request('date_of_birth'),
                'date_of_join' => date('Y-m-d H:i:s'),
                'releaving_date' => '',
                'uan_no' => request('uan_no'),
                'pan_no' => request('pan_no'),
                'esic_no' => request('esic_no'),
                'bank_number' => request('bank_number'),
                'ifsc_code' => request('ifsc_code'),
                'father_name' => request('father_name'),
                'mother_name' => request('mother_name'),
                'blood_group' => request('blood_group'),
                'emer_contact' => request('emer_contact'),
                'curr_adddress' => request('curr_adddress'),
                'curr_country_id' => request('curr_country_id'),
                'curr_state_id' => request('curr_state_id'),
                'curr_city_id' => request('curr_city_id'),
                'curr_pin_code' => request('curr_pin_code'),
                'perma_address' => request('perma_address'),
                'perma_country_id' => request('perma_country_id'),
                'perma_state_id' => request('perma_state_id'),
                'perma_city_id' => request('perma_city_id'),
                'perma_pin_code' => request('perma_pin_code'),
            ]);
            DB::commit();
            return redirect()->route('employee.list')->with('message', 'Employee Details Stored Successfully !!');

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
            // $errorMsg = 'Error on line ' . $e->getLine() . ' in ' . $e->getFile()
            // . ': <b>' . $e->getMessage() . '</b> is not a valid E-Mail address';

            // return $errorMsg;

            // return redirect()->route('employee.list')->with('message', $e->getMessage());
        }

    }

    public function edit($id)
    {
        $employee = Employee::with('currentCountry', 'currentCity', 'permaCountry', 'permaState',
            'permaCity', 'user', 'currentState')->where('user_id', $id)->first();

        // return $employee = User::with('employee', 'currentCountry', 'state', 'city')->find($id);
        return view('admin.employee.edit',
            [
                'countries' => $this->countries,
                'blood_groups' => $this->blood_groups,
                'off_sides' => $this->off_sides,
                'employee' => $employee,
                'roles' => $this->roles,
            ]
        );
    }

    public function show($id)
    {
        $employee = Employee::with('currentCountry', 'currentCity', 'permaCountry', 'permaState', 'permaCity', 'user', 'currentState')->where('user_id', $id)->first();
        return view('admin.employee.show',
            [
                'countries' => $this->countries,
                'blood_groups' => $this->blood_groups,
                'off_sides' => $this->off_sides,
                'roles' => $this->roles,
                'employee' => $employee,
            ]
        );
    }

    // Update employee Details from here
    public function update(Request $request, Employee $employee, User $user)
    {
        $user = User::find($employee->user_id);
        // return request('date_of_birth');
        DB::beginTransaction();
        try {
            request()->validate([
                'name' => 'required|min:3|max:100',
                'present_phone' => 'required|min:10|max:12',
                'perma_number' => 'required|min:10|max:12',
                'emer_contact' => 'required|min:10|max:12',
                'department' => 'required',
                'designation' => 'required',
                'off_on_side' => 'required',
                'date_of_birth' => 'required',
                'uan_no' => 'required',
                'esic_no' => 'required',
                'bank_number' => 'required',
                'ifsc_code' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'blood_group' => 'required',
                'curr_adddress' => 'required',
                'role' => 'required',
                'curr_country_id' => 'required',
                'curr_state_id' => 'required',
                'curr_city_id' => 'required',
                'curr_pin_code' => 'required',
                'perma_address' => 'required',
                'perma_country_id' => 'required',
                'perma_state_id' => 'required',
                'perma_city_id' => 'required',
                'perma_pin_code' => 'required',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('user_images'), $new_name);
                $user->update([
                    'name' => request('name'),
                    'role' => request('role'),
                    'email' => request('email'),
                    'present_phone' => request('present_phone'),
                    'perma_number' => request('perma_number'),
                    'images' => $new_name,
                ]);

            } else {
                $user->update([
                    'name' => request('name'),
                    'role' => request('role'),
                    'email' => request('email'),
                    'present_phone' => request('present_phone'),
                    'perma_number' => request('perma_number'),
                ]);
            }
            $employee->update([
                'department' => request('department'),
                'designation' => request('designation'),
                'off_on_side' => request('off_on_side'),
                'date_of_birth' => request('date_of_birth'),
                'date_of_join' => date('Y-m-d H:i:s'),
                'releaving_date' => '',
                'uan_no' => request('uan_no'),
                'pan_no' => request('pan_no'),
                'esic_no' => request('esic_no'),
                'bank_number' => request('bank_number'),
                'ifsc_code' => request('ifsc_code'),
                'father_name' => request('father_name'),
                'mother_name' => request('mother_name'),
                'blood_group' => request('blood_group'),
                'emer_contact' => request('emer_contact'),
                'curr_adddress' => request('curr_adddress'),
                'curr_country_id' => request('curr_country_id'),
                'curr_state_id' => request('curr_state_id'),
                'curr_city_id' => request('curr_city_id'),
                'curr_pin_code' => request('curr_pin_code'),
                'perma_address' => request('perma_address'),
                'perma_country_id' => request('perma_country_id'),
                'perma_state_id' => request('perma_state_id'),
                'perma_city_id' => request('perma_city_id'),
                'perma_pin_code' => request('perma_pin_code'),
            ]);
            DB::commit();
            return redirect()->route('employee.list')->with('message', 'Employee Details Updated Successfully !!');

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

    }

    public function uploadDoc($employee, UploadDocuments $uploadDocuments)
    {
        $uploadDocuments = UploadDocuments::where('employee_id', $employee)->first();
        return view('admin.employee.upload', compact('employee', 'uploadDocuments'));
    }

    public function doUpload(UploadDocuments $uploadDocuments, $employee, Request $request)
    {
        request()->validate([
            'aadhar_card' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pan_card' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bank_passbook' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (request('uplaod_doc_id') == '') {
            $aadhar_card = $request->file('aadhar_card');
            $aadhar_card_name = rand() . '.' . $aadhar_card->getClientOriginalExtension();
            $aadhar_card->move(public_path('user_documents'), $aadhar_card_name);
            // Upload pan card
            $pan_card = $request->file('pan_card');
            $pan_card_name = rand() . '.' . $pan_card->getClientOriginalExtension();
            $pan_card->move(public_path('user_documents'), $pan_card_name);
            // Bank Passbook
            $bank_passbook = $request->file('bank_passbook');
            $bank_passbook_name = rand() . '.' . $bank_passbook->getClientOriginalExtension();
            $bank_passbook->move(public_path('user_documents'), $bank_passbook_name);

            $uploadDocuments = UploadDocuments::create(
                ['aadhar_card' => $aadhar_card_name, 'pan_card' => $pan_card_name, 'bank_passbook' => $bank_passbook_name, 'employee_id' => request('employee_id')]
            );
        } else {
            $uploadDocuments = UploadDocuments::where('employee_id', $employee)->first();
            if ($request->hasFile('aadhar_card')) {
                $aadhar_card = $request->file('aadhar_card');
                $aadhar_card_name = rand() . '.' . $aadhar_card->getClientOriginalExtension();
                $aadhar_card->move(public_path('user_documents'), $aadhar_card_name);
                $uploadDocumentsDoc = $uploadDocuments->update(
                    ['aadhar_card' => $aadhar_card_name]
                );
            }
            if ($request->hasFile('pan_card')) {
                $pan_card = $request->file('pan_card');
                $pan_card_name = rand() . '.' . $pan_card->getClientOriginalExtension();
                $pan_card->move(public_path('user_documents'), $pan_card_name);
                $uploadDocumentsDoc = $uploadDocuments->update(
                    ['pan_card' => $pan_card_name]
                );
            }
            if ($request->hasFile('bank_passbook')) {
                $bank_passbook = $request->file('bank_passbook');
                $bank_passbook_name = rand() . '.' . $bank_passbook->getClientOriginalExtension();
                $bank_passbook->move(public_path('user_documents'), $bank_passbook_name);
                $uploadDocumentsDoc = $uploadDocuments->update(
                    ['bank_passbook' => $bank_passbook_name]
                );
            }
        }

        return redirect()->route('employee.list')->with('message', 'Document Uploaded Successfully !!');
    }

}
