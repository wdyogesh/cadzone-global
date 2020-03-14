<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\NewsBoards;
use App\User;
use Illuminate\Support\Facades\Auth;

class EmployeController extends Controller
{
    // Login from here
    protected $countries;
    public function __construct()
    {
        $this->countries = Country::pluck("name", "id");
        $this->middleware('auth');
    }

    public function index()
    {
        $count = [
            'contacts' => 10,
            'applicants' => 3,
            'compnies' => 4,
        ];
        $newsboard = NewsBoards::orderBy('id', 'desc')->first();
        return view('employee.dashboard', compact('count', 'newsboard'));
    }

    public function myProfile()
    {
        $blood_groups = ['O+', 'O-', 'A+', 'AB+', 'AB-', 'A-'];
        $off_sides = ['Yes', 'No'];
        $mydetails = User::find(Auth::user()->id)->with('employee')->firstOrFail();
        return view('employee.profile', ['countries' => $this->countries, 'blood_groups' => $blood_groups, 'off_sides' => $off_sides]);
    }
}
