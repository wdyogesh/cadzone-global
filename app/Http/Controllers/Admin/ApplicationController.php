<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;

class ApplicationController extends Controller
{
    // get application list
    public function getList()
    {
        $applications = Application::all();
        return view('admin.applicants', compact('applications'));
    }

    public function details($id)
    {
        $details = Application::where('id', $id)->firstOrFail();
        //return $details->id;
        return view('admin.applicantDetails', compact('details'));
    }
}
