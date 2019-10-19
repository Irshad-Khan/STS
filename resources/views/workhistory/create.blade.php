@extends('layouts.layout')
@section('content')
   <div class="album text-muted">
     <div class="container">
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
  <div class="tabeldata" style="max-width: 1330px; margin-left: auto; margin-right: auto;">

  </div>
@endsection
