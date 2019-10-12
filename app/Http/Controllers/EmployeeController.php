<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Function is used to redirect to create view
     * 
     */
    public function create()
    {
        return view('employee.create');
    }

     /**
     * Function used to store data of employee in database
     * 
     */
    public function store(Request $request){
        Employee::create($request->all());
        $request->session()->flash('alert-success', 'Employee Record successful Saved!');
        return redirect('/employee/create');
    }

    /**
     * Function used to display all record
     * 
     */
    public function read()
    {
        $employees = Employee::all();
        return view('employee.read', compact('employees'));
    }

    /**
     * Function used to return record ro show view
     * 
     */
    public function show($id)
    {
        dd($id);
    }
    /**
     * Function used find record of employee and return back
     * edit view with employee specific record
     * 
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit',compact('employee'));
    }

    /**
     * Function used to update record of employee
     * 
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        $request->session()->flash('alert-info', 'Employee Record successful Updated!');
        return redirect('/employee/read');
    }

    /**
     * Function used to delete Employee Record
     * 
     */
    public function delete(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        $request->session()->flash('alert-danger', 'Employee Record successful deleted!');
        return redirect('/employee/read');
    }
   
}
