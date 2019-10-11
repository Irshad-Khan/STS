<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request){
        // $employee =new Employee();
        // $employee->name = $request->name;
        // $employee->address = $request->address;
        // $employee->cnic = $request->cnic;
        // $employee->mobile = $request->mobile;
        // $employee->city = $request->city;
        // $employee->save();
        Employee::create($request->all());
        $request->session()->flash('alert-info', 'Employee Record successful added!');
        return redirect('/employee/create');
    }
}
