@extends('layouts.layout')
@section('content')
   <div class="album text-muted">
     <div class="container">
     <!-- Modal -->
 <div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       </div>
       <div class="modal-body" id="getCode" style="text-align: center; font-size: 18px; background: #5cb85c; color: white;">
          //ajax success content here.
       </div>
    </div>
   </div>
 </div>
       <div class="row">
       <form method="post" action="/employee/workhistory/store" id="workhistory" enctype="multipart/form-data" class="form-style">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <h3 style="text-align:center;">Enter Employee Work</h3>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Select Employee</label>
      <Select class="form-control" name="employee" required>
        <option>Select</option>
        @foreach ($employee as $key=>$value)
        <option value="{{ $key }}">{{ $value }}</option>    
        @endforeach
      </Select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Suit Quantity</label>
      <input type="number" name="suitqty" id="suitqty" value="0" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Price Per Suit</label>
      <input type="text" name="suitprice" id="suitprice" value="0" class="form-control"  disabled>
    </div>
  </div>  
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="shirtqty">Shirt Quantity</label>
      <input type="number" name="shirtqty" id="shirtqty" value="0" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label for="shirtprice">Price Per Shirt</label>
      <input type="text" name="shirtprice" id="shirtprice" value="0" class="form-control" disabled>
    </div>
  </div>  
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="pentqty">Pent Quantity</label>
      <input type="number" name="pentqty" id="pentqty" value="0" class="form-control"> 
    </div>
    <div class="form-group col-md-6">
      <label for="pricepent">Price Per Pent</label>
      <input type="text" name="pentprice" id="pentprice" value="0" class="form-control" disabled>
    </div>
  </div>  
  <div style="text-align: center;">
    <button type="submit" class="btn btn-primary">Add Emloyee Work</button>
    {{--  <a href="" class="btn btn-primary">View Employee Work Detail</a>  --}}
  </div>
</form>
     </div>
     </div>
   </div>
   <hr>
<div class="container" style="max-width: 1370px;">
<h3 style="text-align: center; margin-top: 30px; margin-bottom: 30px; color: #629270;">Employee Work Reocrd</h3>
<hr>
 <table id="tableID" class="table table-striped table-bordered" style="width:100%">
      <thead>
            <tr>
                <th>#</th>
                <th>Employee</th>
                <th>Suit Qty</th>
                <th>Shirt Qty</th>
                <th>Pent Qty</th>
                <th>Suit Rate</th>
                <th>Shirt Rate</th>
                <th>Pent Rate</th>
                <th>Total</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody class="tabeldata" style="max-width: 1330px; margin-left: auto; margin-right: auto;">
          @foreach ($workhistory as $key => $val )
                <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $val->employee->name }}</td>
                <td><input type="text" name="suitqty" id="suitqty" value="{{ $val->suitqty }}" class="form-control field-style suitqty" disabled></td>
                <td><input type="text" name="shirtqty" id="shirtqty" value="{{ $val->shirtqty }}" class="form-control field-style shirtqty" disabled></td>
                <td><input type="text" name="pantqty" id="pantqty" value="{{ $val->pantqty }}" class="form-control field-style pantqty" disabled></td>
                <td><input type="text" name="suitprice" id="suitprice" value="{{ $val->suitprice }}" class="form-control field-style suitprice" disabled></td>
                <td><input type="text" name="shirtprice" id="shirtprice" value="{{ $val->shirtprice }}" class="form-control field-style shirtprice" disabled></td>
                <td><input type="text" name="pentprice" id="pentprice" value="{{ $val->pentprice }}" class="form-control field-style pentprice" disabled></td>
                <td><input type="text" name="totalprice" id="totalprice" value="{{ $val->totalprice }}" class="form-control field-style totalprice" readonly></td>
                <td style="text-align: center;">
                    <button type="button" class="btn btn-primary action-btn-size updateworkhistory"><i class="fa fa-edit"></i> Edit</button>
                    <a href="{{ url('employee/workhistory/delete/'.$val->id ) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger action-btn-size"><i class="fa fa-trash"></i> Delete</a>
                </td>
                </tr>
            @endforeach     
        </tbody>
        <table>
        </div>
        </html>

 
@endsection
