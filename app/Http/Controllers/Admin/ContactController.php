<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
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

    // Employees listing and all related functions are here.
    public function index()
    {
        $contacts = Contact::all();
        return view('Admin/contact', compact('contacts'));
    }
}
