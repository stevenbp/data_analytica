@section('title', 'Patient Entry Form')
@extends('layouts.app')
@section('pageTitle', 'Select Data Entry Location')
@section('content')
<div class="row">
    <div class="col-lg-6">
      {{-- <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br /> --}}

 <div class="form-group">
  <select name="province" id="province" class="form-control input-lg dynamic" data-dependent="district">
   <option value="">Select Province</option>
   @foreach($province_list as $province)
   <option value="{{ $province->province}}">{{ $province->province }}</option>
   @endforeach
  </select>
 </div>
 <br />
 <div class="form-group">
  <select name="district" id="district" class="form-control input-lg dynamic" data-dependent="facility">
   <option value="{{ $province->province}}">Select District</option>
  </select>
 </div>
 <br />
 <div class="form-group">
  <select name="facility" id="facility" class="form-control input-lg">
   <option value="">Select Facility</option>
  </select>
 </div>
 <a href="/patientDetails"><button id="button" type="button" class="btn btn-primary">Go to form</button></a>

 {{ csrf_field() }}
 <br />
 <br />
    </div>
    <!-- /.col-lg-12 -->
</div>

@endsection
