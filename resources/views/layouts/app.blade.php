<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="css/bootstrap.css"> --}}
    <script src="js/jquery-3.1.0.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/bootstrap_3.3.6.css">
    <script src="js/bootstrap.3.3.7.js" charset="utf-8"></script>

    <link rel="stylesheet" href="css/metisMenu.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/morris.css">
    <link rel="stylesheet" href="css/font-awesome.css">

  </head>
  <body>

    <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Analytica</a>
          </div>
          <!-- /.navbar-header -->

          <ul class="nav navbar-top-links navbar-right">

              <!-- /.dropdown -->

              <!-- /.dropdown -->

              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                      </li>
                      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                  </ul>
                  <!-- /.dropdown-user -->
              </li>
              <!-- /.dropdown -->
          </ul>
          <!-- /.navbar-top-links -->

          <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">
                      <li class="sidebar-search">
                          <div class="input-group custom-search-form">
                              <input type="text" class="form-control" placeholder="Search...">
                              <span class="input-group-btn">
                              <button class="btn btn-default" type="button">
                                  <i class="fa fa-search"></i>
                              </button>
                          </span>
                          </div>
                          <!-- /input-group -->
                      </li>
                      <li>
                          <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="flot.html">Flot Charts</a>
                              </li>
                              <li>
                                  <a href="morris.html">Morris.js Charts</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                      </li>
                      <li>
                          <a href="forms"><i class="fa fa-edit fa-fw"></i> Forms</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="panels-wells.html">Panels and Wells</a>
                              </li>
                              <li>
                                  <a href="buttons.html">Buttons</a>
                              </li>
                              <li>
                                  <a href="notifications.html">Notifications</a>
                              </li>
                              <li>
                                  <a href="typography.html">Typography</a>
                              </li>
                              <li>
                                  <a href="icons.html"> Icons</a>
                              </li>
                              <li>
                                  <a href="grid.html">Grid</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="blank.html">Blank Page</a>
                              </li>
                              <li>
                                  <a href="login.html">Login Page</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                  </ul>
              </div>
              <!-- /.sidebar-collapse -->
          </div>
          <!-- /.navbar-static-side -->
      </nav>

        <!-- /.page-wrapper -->
      <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">@yield('pageTitle')</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          @yield('content')
          <!-- /.row -->

          <!-- /.row -->
      </div>
      <!-- /#page-wrapper -->

  </div>
      <script src="js/app.js" charset="utf-8"></script>
      {{-- <script src="js/jquery.js" charset="utf-8"></script>
      <script src="js/bootstrap.js" charset="utf-8"></script> --}}
      <script src="js/metisMenu.js" charset="utf-8"></script>
      <script src="js/raphael.js" charset="utf-8"></script>
      <!-- <script src="js/morris.js" charset="utf-8"></script> -->
      <!-- <script src="js/morris-data.js" charset="utf-8"></script> -->
      <script src="js/sb-admin-2.js" charset="utf-8"></script>


  </body>
</html>
<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamicdependent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }

 });

 $('#province').change(function(){
  $('#district').val('');
  $('#facility').val('');
  // var optionProvince = $("#province option:selected").text();
  // alert("Selected Option Text: "+optionProvince);
 });

 $('#district').change(function(){
  $('#facility').val('');
  // var optionDistrict = $("#district option:selected").text();
  // alert("Selected Option Text: "+optionDistrict);
 });

});

$('#button').on('click', function () {
  var province = $("#province option:selected").text();
  var district = $("#district option:selected").text();
  var facility = $("#facility option:selected").text();

  console.log(province);
});


</script>
