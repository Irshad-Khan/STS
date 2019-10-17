<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class WorkHistoryController extends Controller
{
    public function create (){
        $employee = Employee::all()->pluck('name','id');
        return view('workhistory.create',compact('employee'));
    }
}
