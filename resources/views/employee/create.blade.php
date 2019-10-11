@extends('layouts.layout')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
       <form class="form-style">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">CNIC</label>
      <input type="text" class="form-control" placeholder="CNIC">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
    <div class="form-group">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
  <div class="form-group">
    <label for="inputAddress">Mobile Number</label>
    <input type="text" class="form-control" placeholder="+923023333333">
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
         </div>
     </div>
   </div>
@endsection
