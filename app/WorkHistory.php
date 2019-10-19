<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkHistory extends Model
{
    protected $fillable = ['employee_id', 'suitqty','cnic', 'shirtqty','pantqty','suitprice','shirtprice','pentprice','totalprice'];
    
    /**
     * 
     * 
     */
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
