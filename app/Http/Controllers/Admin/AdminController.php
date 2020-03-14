<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\NewsBoards;

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
            'applicants' => 3,
            'compnies' => 4,
        ];
        $newsboard = NewsBoards::orderBy('id', 'desc')->first();
        return view('admin.dashboard', compact('count', 'newsboard'));
    }
}
