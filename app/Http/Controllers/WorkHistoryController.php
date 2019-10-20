<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\WorkHistory;
use App\Service\WorkHistoryService;
use Illuminate\Support\Facades\DB;
class WorkHistoryController extends Controller
{
    
    /**
     * Function is used to get only name and id of all employee and return back to 
     * create view of employee workhistory
     * 
     */
    public function create (){
        $employee = Employee::all()->pluck('name','id');
        $workhistory = DB::table('work_histories')
                        ->select('employee_id','suitqty','shirtqty','pantqty','suitprice','shirtprice','pentprice','totalprice')
                        ->get();
        return view('workhistory.create',compact('employee','workhistory'));
    }

    /**
     * Function is used to get request data from ajax call of employee workhistory
     * create view and call the static method calculateTotalPrice of class WorkHistoryService
     * to calculate total price
     * 
     */
    public function store (Request $request){
        $workhistory = new WorkHistory();
        $workhistory->employee_id = $request->employee_id;
        $workhistory->suitqty = $request->suitqty;
        $workhistory->shirtqty = $request->shirtqty;
        $workhistory->pantqty = $request->pantqty;
        $workhistory->suitprice = $request->suitprice;
        $workhistory->shirtprice = $request->shirtprice;
        $workhistory->pentprice = $request->pentprice;
        $workhistory->totalprice = WorkHistoryService::calculateTotalPrice($request);
        $workhistory->save();
        $workhistory = DB::table('work_histories')
                        ->select('employee_id','suitqty','shirtqty','pantqty','suitprice','shirtprice','pentprice','totalprice')
                        ->get();
        $view = view("ajaxView.workhistory",compact('workhistory'))->render();
        return response()->json(['html'=>$view]);
    }
}
