<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkHistoryController extends Controller
{
    public function create (){

        return view('workhistory.create');
    }
}
