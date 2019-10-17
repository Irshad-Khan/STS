@extends('layouts.layout')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
       <form method="post" action="" enctype="multipart/form-data" class="form-style">
            {{ csrf_field() }}
        <h3 style="text-align:center;">Enter Employee Work</h3>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Select Employee</label>
      <Select class="form-control" name="employee">
        <option>Select</option>
        @foreach ($employee as $key=>$value)
        <option value="{{ $key }}" required="required">{{ $value }}</option>    
        @endforeach
      </Select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Suit Quantity</label>
      <input type="number" name="suitqty" id="suitqty" class="form-control" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Price Per Suit</label>
      <input type="text" name="suitprice" id="suitprice" class="form-control" required="required"  disabled>
    </div>
  </div>  
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="shirtqty">Shirt Quantity</label>
      <input type="number" name="shirtqty" id="shirtqty" class="form-control" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="shirtprice">Price Per Shirt</label>
      <input type="text" name="shirtprice" id="shirtprice" class="form-control" required="required" disabled>
    </div>
  </div>  
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="pentqty">Pent Quantity</label>
      <input type="number" name="pentqty" id="pentqty" class="form-control" required="required"> 
    </div>
    <div class="form-group col-md-6">
      <label for="pricepent">Price Per Pent</label>
      <input type="text" name="pentprice" id="pentprice" class="form-control" required="required" disabled>
    </div>
  </div>  
 <div class="form-row">
 <div class="form-group col-md-12">
    <lable for="totalPrice">Total Price</label>
    <input type="text" name="totalPrice" id="totalprice" class="form-control" readonly>
 </div>
 </div>
  <div style="text-align: center;">
    <button type="submit" class="btn btn-primary">Add Emloyee Work</button>
    <a href="{{ url('employee/read') }}" class="btn btn-primary">View Employee Work Detail</a>
  </div>
</form>
         </div>
     </div>
   </div>
@endsection
