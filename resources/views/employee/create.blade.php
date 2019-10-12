@extends('layouts.layout')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
       <form method="post" action="/employee/store" enctype="multipart/form-data" class="form-style">
            {{ csrf_field() }}
        <h3 style="text-align:center;">Enter the Emloyee Record</h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">CNIC</label>
      <input type="text" class="form-control" name="cnic" placeholder="CNIC">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
  </div>
    <div class="form-group">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity" placeholder="City">
    </div>
  <div class="form-group">
    <label for="inputAddress">Mobile Number</label>
    <input type="text" class="form-control" name="mobile" placeholder="+923023333333">
  </div>
  <div style="text-align: center;">
    <button type="submit" class="btn btn-primary">Add Emloyee</button>
    <button type="reset" class="btn btn-primary">Reset</button>
    <a href="{{ url('employee/read') }}" class="btn btn-primary">Employee's Detail</a>
  </div>
</form>
         </div>
     </div>
   </div>
@endsection
