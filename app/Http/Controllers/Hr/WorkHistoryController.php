<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\workHistory;

class WorkHistoryController extends Controller
{
    public function index()
    {
        $workhistory = workHistory::all();
        return view('employee.dashboard', compact('workhistory'));
    }
}
