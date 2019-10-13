@extends('layouts.layout')
@section('content')
    <div class="container" style="max-width: 900px !important; margin-top: 30px;">
        <div>
            <h2 style="text-align:center; color:#629270;">Employee Report</h2>
        </div>
  <fieldset>
    <legend>Bio Data</legend>
    <div>
        <div class="row">
            <div class="col-md-3">
                <h6>Employee Name:</h6>
            </div>
            <div class="col-md-9">
                <h6>{{ $employee->name }}</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h6>Employee Address:</h6>
            </div>
            <div class="col-md-9">
                <h6>{{ $employee->address }}</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h6>Employee CNIC:</h6>
            </div>
            <div class="col-md-9">
                <h6>{{ $employee->cnic }}</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h6>Employee Mobile:</h6>
            </div>
            <div class="col-md-9">
                <h6>{{ $employee->mobile }}</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h6>Employee City:</h6>
            </div>
            <div class="col-md-9">
                <h6>{{ $employee->city }}</h6>
            </div>
        </div>
        </div>
        <div class="work-history">
            <legend>Work History</legend>
        </div>

        <div class="salary-history">
            <legend>Salary History</legend>
        </div>
        
        <a href="{{ URL::previous() }}" class="btn btn-primary" style="border-radius: 21px;" title="Back"><i class="fa fa-arrow-circle-left"></i></i></a>
        <hr>
        </fieldset>
        </form>
    </div>
@stop
