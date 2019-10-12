@extends('layouts.layout')
@section('content')
    <div style="    text-align: center; margin-top: 30px; color: #629270;">
        <h3>All Employee Record</h3>
    </div>
    <hr>
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>ID Card Number</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($employees as $key => $employee )
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->cnic }}</td>
                <td>{{ $employee->mobile }}</td>
                <td>{{ $employee->city }}</td>
                <td style="text-align: center;">
                    <a href="{{ url('employee/show/'.$employee->id ) }}" class="btn btn-warning action-btn-size"><i class="fa fa-eye"></i> View</a>
                    <a href="{{ url('employee/edit/'.$employee->id ) }}" class="btn btn-primary action-btn-size"><i class="fa fa-edit"></i> Update</a>
                    <a href="{{ url('employee/delete/'.$employee->id ) }}" onclick="return confirm('Are you sure to Delete?')" class="btn btn-danger action-btn-size"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection