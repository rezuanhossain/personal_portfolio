<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Admin Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/app.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link"  href="{{ route('mail.view') }}">
          <i class="far fa-bell fa-lg" style="margin-right: 5px;"></i>
          <span class="badge badge-warning navbar-badge">{{ $count ?? "0" }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  data-slide="true" href="/logout" >Log Out  <i class="fas fa-sign-out-alt"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset(auth()->user()->image ? 'images/'.auth()->user()->image : 'images/avatar.jpg') }}" class="img-circle elevation-6" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Details
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#skill_section" class="nav-link smothscroll" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Skills</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#personal_info" class="nav-link scroll-smooth">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personal Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#social_media" class="nav-link smothscroll">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mange Social Media Links</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#education_section" class="nav-link smothscroll">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Education Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#award_section" class="nav-link smothscroll">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Awards & Achievements</p>
                </a>
              </li>
            </ul>
          </li>


          {{-- manage education details --}}
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Manage Education Info
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('education.view') }}" class="nav-link smothscroll" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Entries</p>
                </a>
              </li>

            </ul>
          </li>

          {{-- manage work details --}}
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-poll"></i>
              <p>
                Manage Work Info
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('workfield.list') }}" class="nav-link smothscroll" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Entries</p>
                </a>
              </li>

            </ul>
          </li>
          {{-- manage award details --}}
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-certificate"></i>
              <p>
                Manage Awar(s) Info
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('award.view') }}" class="nav-link smothscroll" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Entries</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a class="btn" style="background-color: rgb(86, 226, 203)" href="{{ route('homepage',['id' => auth()->user()->id]) }}"><h1 class="m-0 text-white">Visit Your Site <i class="fa fa-arrow-right"></i></h1></a >
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-body" id="skill_section">
                <form action="{{ route("profile.update") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="address">Your Genera  </label>
                    <input class="form-control form-group" type="text" name="genera" placeholder="Put Your Work Genera" value={{ Auth::user()->genera ?? "" }} >
                <h5 class="card-title">Add Skills</h5>
                <div>
                    <input type="hidden" name="id" value={{ Auth::user()->id }}>
                   <input class="form-control form-group" type="text" id="skill" name="skill" placeholder="Put Skill Name">
                   <input class="form-control form-group" type="number" id="skill_level" name="skill_level" placeholder="Put Skill Level">

                  <input class="form-group btn btn-primary" id="add" value="Add" readonly>

                <div id="dynamicTable">
                    <br>
                    <h6>Your current skill stack:</h6>
                    @if(!is_null(Auth::user()->skills))
                    @foreach(Auth::user()->skills as $key => $value)
                    <input type="hidden" name="skills[{{ $key }}]" class="form-control" value="{{ $value }}" style="margin:5px;"/>

                    <span class="badge badge-secondary" style="padding:10px;">{{ Auth::user()->skills[$key] }}</span>
                    @endforeach
                    @endif
                </div>
                </div>


              </div>
            </div>

            <div class="card card-primary" id="social_media">

              <div class="card-body" >
                <h5 class="card-title form-group">Add Or Update Social Media Links</h5><br><br><br>
                <label for="socaila_links[facebook]">Facebook </label>
                <input class="form-control form-group" type="text" name="social_links[facebook]" placeholder="Put Facebook Profile Link" >
                <label for="socaila_links[linkedin]">LinkedIn </label>
                <input class="form-control form-group" type="text" name="social_links[linkedin]" placeholder="Put LinkedIn Profile Link" >
                <label for="socaila_links[instagram]">Instagram </label>
                <input class="form-control form-group" type="text" name="social_links[instagram]" placeholder="Put Instagram Profile Link" >
                <label for="socaila_links[github]">Git-Hub </label>
                <input class="form-control form-group" type="text" name="social_links[github]" placeholder="Put Git-Hub Profile Link" >
                <label for="socaila_links[twitter]">Twitter </label>
                <input class="form-control form-group" type="text" name="social_links[twitter]" placeholder="Put Twitter Profile Link" >

              </div>
            </div>

            {{-- education section --}}

            <div class="card card-primary " id="education_section">

                <div class="card-body">
                  <h5 class="card-title form-group">Add Or Update Education Details</h5><br><br>
                  <label for="title">Degree </label>
                  <input class="form-control form-group" type="text" id="title" name="title" placeholder="Put Degree title" >
                  <label for="institution">Institution </label>
                  <input class="form-control form-group" type="text" id="institution" name="institution" placeholder="Put The institution" >
                  <label for="years">Years </label>
                  <input class="form-control form-group" type="number" id="years" name="years" placeholder="Put Course Years " >
                  <label for="graduating_in">Graduation Date </label>
                  <input class="form-control form-group" type="date" id="graduating_in" name="graduating_in" placeholder="Put Graduation Date" >
                  <label for="Status">Status </label>
                 <select class="form-control form-group" name="status" id="status">
                  <option value="">--Select--</option>
                     <option value="graduated">Graduated</option>

                     <option value="in-progress">In-Progress</option>
                 </select>
                 <input class="form-group btn btn-primary" id="add2" value="Add" readonly>
                 <a href="{{ route('education.view') }}" class="btn btn-success" id="edit" >Edit Entry</a>
                </div>
                <div id="dynamicTable2">

                </div>

            </div>
            {{-- Awards section --}}
            <div class="card card-primary" id="award_section">
                <div class="card-body">
                    <label for="award">Award </label>
                    <input class="form-control form-group" type="text" id="award" name="award" placeholder="Put Award title" >
                    <label for="given_by">Given By </label>
                    <input class="form-control form-group" type="text" id="given_by" name="given_by" placeholder="Put The institute / organization name" >
                    <label for="award_date">Received Date </label>
                    <input class="form-control form-group" type="date" id="award_date" name="award_date" placeholder="Put Received Date" >
                    <textarea class="form-control" id="award_description" placeholder="Put Award Description ..." name="award_description" rows="3"></textarea><br>
                   <input class="form-group btn btn-primary" id="add4" value="Add" readonly>
                   <a id="edit4"  href="{{ route('award.view') }}" class="btn btn-success form-control form-group" style="display: none;" >Edit Entry</a>
                </div>
            </div>
            {{-- work section --}}
            <div class="card card-primary ">
                <div class="card-body">
                    <h5 class="card-title form-group">Add Or Update Work Details</h5><br><br>
                  <label for="title">Job Title </label>
                  <input class="form-control form-group" type="text" id="work_title" name="work_title" placeholder="Put Job title" >
                  <label for="company">Company </label>
                  <input class="form-control form-group" type="text" id="company" name="company" placeholder="Put The Company" >
                  <label for="from">Started Date </label>
                  <input class="form-control form-group" type="date" id="from" name="from" placeholder="Put Graduation Date" >
                  <label for="Status">Status </label>
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" id="end" name="end"  value="current" >
                    <label class="form-check-label" for="current">
                      CURRENT
                    </label>
                  </div>
                  <div class="form-check ">
                    <input class="form-check-input" type="radio"  name="end" id="exampleRadios1" >
                    <label class="form-check-label" for="exampleRadios1">
                      Finished
                    </label>
                  </div>
                  <label for="from">Finished Date </label>
                  <input class="form-control form-group" style="display:none;" type="date" id="to" name="to" placeholder="Put Finished Date" >
                  <label for="des">Work Description</label>
                  <textarea class="form-control" id="des" placeholder="Put Work Description ..." name="work_description" rows="3"></textarea><br>
                  <input class="form-group btn btn-primary" id="add3" value="Add" readonly>
                  <a href="{{ route('workfield.list') }}" class="btn btn-success form-group form-control" id="edit2" style="display: none;">Edit Entry</a>

                </div>
            </div>

            {{-- personal info section --}}
            <div class="card card-primary " id="personal_info">

                <div class="card-body">
                  <h5 class="card-title form-group">Add Or Update Personal Information</h5><br><br>
                  <label for="address">Name </label>
                  <input class="form-control form-group" type="text" name="name" placeholder="Put Name"  value={{ Auth::user()->name ?? "" }}>
                  <label for="address">Email </label>
                  <input class="form-control form-group" type="text" name="email" placeholder="Put Email" value={{ Auth::user()->email ?? "" }} >
                  <label for="address">Phone Number </label>
                  <input class="form-control form-group" type="text" name="phone_no" placeholder="Put Phone Number" value={{ Auth::user()->phone_no ?? "" }} >

                  <label for="address">Address </label>
                  <input class="form-control form-group" type="text" name="address" placeholder="Put Address (don't put space..)" value={{ Auth::user()->address ?? ""}} >
                  <label for="About">About</label>
                  <textarea class="form-control" id="About"  name="about" rows="3">{{ Auth::user()->about?? "" }}</textarea><br>
                  <label  >Put Your Site Hero Iamge <small>(Recomended: 13:6 ratio)</small></label><br>
                  <label for="image" class="btn btn-primary form-group" id="selector" style="cursor: pointer;">Select Image <i class="fas fa-image"></i></label>

                  <input class="form-group form-control" style="opacty:1;position: absolute;z-index:-1;" type="file" id="image" name="image">
                </div>

              </div>
            <input type="submit" class="btn btn-primary form-group form-control">
        </form><!-- /.card -->
        </div>


          <!-- /.col-md-6 -->

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<style>
  #edit{
    display:none;
    color: white;


  }
</style>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script type="text/javascript">
$("#add").click(function(){

    console.log("hit");
    var skill=$("#skill").val();
    var skill_level=$("#skill_level").val();

    $("#dynamicTable").append('<tr><td><input type="text" name="skills['+skill+']" class="form-control" value="'+skill+''+skill_level+''+"%"+'" style="margin:5px;"/> <td><button type="button" class="btn btn-danger btn-md remove-tr">x</button></td></tr>');
    $("#skill").val("");
    $("#skill_level").val("");
});


$(document).on('click', '.remove-tr', function(){
     $(this).parents('tr').remove();
});
</script>
<script>
    $("#add2").click(function(){
    console.log("hit");
    var title=document.getElementById('title').value;
    var institution=document.getElementById('institution').value;
    var years=document.getElementById('years').value;
    var graduating_in=document.getElementById('graduating_in').value;
    var status=document.getElementById('status').value;
    let _token   = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
       url: "/education",
        type:"POST",
        data:{
          title:title,
          institution:institution,
          years:years,
          graduating_in:graduating_in,
          status: status,
          _token: _token
        },
        success:function(response){
          document.getElementById('title').value="";
          document.getElementById('institution').value="";
          document.getElementById('years').value="";
          document.getElementById('graduating_in').value="";
          document.getElementById('status').value="";
          let button=document.getElementById('edit')
          button.style.display="block";
          button.style.color="white";
          button.style.padding="10px";

          button.style.height="50px";

          button.style.margin="0px";

          console.log(response);

        },
       });
});

</script>
<script type="text/javascript">
    $("#exampleRadios1").click(function(){
        let to=document.getElementById('to');
        to.style.display="block";
    });

</script>


<script>
    $("#add3").click(function(){
    console.log("hit");
    var title=document.getElementById('work_title').value;
    var company=document.getElementById('company').value;
    var description=document.getElementById('des').value;
    var from=document.getElementById('from').value;
    var to2="";
    var end2="";
    var to=document.getElementById('to');
    var end=document.getElementById('end');
    if(to !=='null'){
        to2=to.value;
    }
    if(end !=='null'){
        end2=end.value;
    }

    let _token   = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
       url: "/workfield-create",
        type:"POST",
        data:{
          title:title,
          company:company,
          description:description,
          from:from,
          to: to2,
          end: end2,
          _token: _token
        },
        success:function(response){

          let button=document.getElementById('edit2')
          button.style.display="block";
          button.style.color="white";
          button.style.padding="10px";

          button.style.height="50px";

          button.style.margin="0px";
        },
       });
    });
</script>

<script>
    $("#add4").click(function(){
    console.log("hit");
    var award=document.getElementById('award').value;
    var given_by=document.getElementById('given_by').value;
    var award_date=document.getElementById('award_date').value;
    var award_description=document.getElementById('award_description').value;

    let _token   = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
       url: "/award-create",
        type:"POST",
        data:{
          award:award,
          given_by:given_by,
          description:award_description,
          date:award_date,

          _token: _token
        },
        success:function(response){

          let button=document.getElementById('edit4')
          button.style.display="block";
          button.style.color="white";
          button.style.padding="10px";

          button.style.height="50px";

          button.style.margin="0px";
        },
       });
    });
</script>


</body>
</html>
