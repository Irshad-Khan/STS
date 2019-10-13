@extends('layouts.layout')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
       <form method="post" action="{{ url('employee/update/'.$employee->id ) }}" enctype="multipart/form-data" class="form-style">
            {{ csrf_field() }}
        <h3 style="text-align:center;">Enter the Emloyee Record</h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $employee->name }}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">CNIC</label>
      <input type="text" class="form-control" name="cnic" placeholder="CNIC" value="{{ $employee->cnic }}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" value="{{ $employee->address }}">
  </div>
    <div class="form-group">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity" placeholder="City" value="{{ $employee->city }}">
    </div>
  <div class="form-group">
    <label for="inputAddress">Mobile Number</label>
    <input type="text" class="form-control" name="mobile" placeholder="+923023333333" value="{{ $employee->mobile }}">
  </div>
  <div style="text-align: center;">
    <a href="{{ URL::previous() }}" class="btn btn-primary" style="border-radius: 21px;" title="Back"><i class="fa fa-arrow-circle-left"></i></i></a>
    <button type="submit" class="btn btn-primary">Update Emloyee</button>
  </div>
</form>
         </div>
     </div>
   </div>
@endsection
