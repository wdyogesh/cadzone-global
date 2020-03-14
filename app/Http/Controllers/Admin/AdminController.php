<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Company;
use App\Models\Contact;
use App\Models\NewsBoards;
use App\User;

class AdminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = [
            'contacts' => Contact::count(),
            'applicants' => Application::count(),
            'compnies' => Company::count(),
            'employees' => User::where('role', '3')->count(),
            'hr' => User::where('role', '2')->count(),
        ];
        $newsboard = NewsBoards::orderBy('id', 'desc')->first();
        return view('admin.dashboard', compact('count', 'newsboard'));
    }
}
