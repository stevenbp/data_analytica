in
@section('title', 'Patient Details')
@extends('layouts.app')
@section('pageTitle', 'Enter Details')
@section('content')


  {{-- <script type="text/javascript">
      var queryString = new Array();
      $(function () {
          if (queryString.length == 0) {
              if (window.location.search.split('?').length > 1) {
                  var params = window.location.search.split('?')[1].split('&');
                  for (var i = 0; i < params.length; i++) {
                      var key = params[i].split('=')[0];
                      var value = decodeURIComponent(params[i].split('=')[1]);
                      queryString[key] = value;
                  }
              }
          }
          if (queryString["passprovine"] != null && queryString["passdistrict"] != null && queryString["passfacility"] != null) {
              var data = "<u>Values from QueryString</u><br /><br />";
              data += "<b>Provine:</b> " + queryString["passprovine"] + " <b>District:</b> " + queryString["passdistrict"] + " <b>Facility:</b> " + queryString["passfacility"];
              $("#lblData").html(data);



  //passing value to the drop down menu here
                  // document.getElementById('Date_Month').value = 'passmonth';
                  // document.getElementById('Date_Day').value = 'passdate';
                  // document.getElementById('Date_Year').value = 'passyear';
              }
          });
      </script> --}}


      <hr />
          <span id="lblData"></span>
          <br/>
      <hr />


<div class="row">
  <div class="col-lg-4">
      <h3>Province:</h3>
  </div>
  <div class="col-lg-4">
      <h3>District:</h3>
  </div>
  <div class="col-lg-4">
      <h3>Facility:</h3>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Name">
      </div>
      <div class="form-group">
          <label for="name">phone</label>
          <input type="number" class="form-control" id="name" placeholder="Enter Phone Number">
      </div>
      <div class="form-group">
          <label for="name">phone</label>
          <input type="number" class="form-control" id="name" placeholder="Enter Phone Number">
      </div>
      <div class="form-group">
          <label for="name">phone</label>
          <input type="number" class="form-control" id="name" placeholder="Enter Phone Number">
      </div>
  </div>
  <div class="col-lg-6">

  </div>
</div>

@endsection
