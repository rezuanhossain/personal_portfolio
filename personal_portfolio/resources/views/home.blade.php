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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Skills</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
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
            <a class="btn" style="background-color: rgb(86, 226, 203)" href="{{ route('homepage') }}"><h1 class="m-0 text-white">Visit Your Site <i class="fa fa-arrow-right"></i></h1></a >
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
              <div class="card-body">
                <form action="{{ route("profile.update") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <h5 class="card-title">Add Skills</h5>
                <div>
                    <input type="hidden" name="id" value={{ Auth::user()->id }}>
                   <input class="form-control form-group" type="text" id="skill" name="skill" placeholder="Put Skill Name">
                   <input class="form-control form-group" type="number" id="skill_level" name="skill_level" placeholder="Put Skill Level">
                   <input class="btn btn-primary" id="add" value="Add">

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

            <div class="card card-primary ">

              <div class="card-body">
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
            <div class="card card-primary ">

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

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script type="text/javascript">



$("#add").click(function(){


    var skill=$("#skill").val();
    var skill_level=$("#skill_level").val();

    $("#dynamicTable").append('<tr><td><input type="text" name="skills['+skill+']" class="form-control" value="'+skill+''+skill_level+''+"%"+'" style="margin:5px;"/> <td><button type="button" class="btn btn-danger btn-md remove-tr">x</button></td></tr>');
    $("#skill").val("");
    $("#skill_level").val("");
});

$(document).on('click', '.remove-tr', function(){
     $(this).parents('tr').remove();
});

</body>
</html>
