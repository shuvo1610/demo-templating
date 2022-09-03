<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create()
    {
    	return view('employee.registation');
    }
    public function store(Request $request)
    {
    	$employee = Employee::create($request->all());
    	return back();
    }
}
