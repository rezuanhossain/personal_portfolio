<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resume Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body data-spy="scroll" data-offset="64" data-target="#section-topbar">

  <div id="section-topbar">
    <div id="topbar-inner">
      <div class="container">
        <div class="row">
          <div class="dropdown">
            <ul id="nav" class="nav">
              <li class="menu-item"><a class="smothscroll" href="#about" title="About"><i class="fa fa-user"><span> About</span></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#resume" title="Resume"><i class="fa fa-file-text-o"><span> Resume</span></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#work" title="Works"><i class="fa fa-briefcase"><span>  Works</span></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#contact" title="Contact"><i class="fa fa-envelope"><span> Contact</span></i></a></li>
                <li class="menu-item">
              @auth
              <a  href="{{ route('home') }}" title="Contact"><i class="fa fa-gear"><span> Dashboard</span></i></a>
              @endauth
            </li>
            </ul>
            <!--/ uL#nav -->
            <div class="card-body" >
                @if (session('message'))
                <div class="alert alert-success alert-block d-flex justify-content-between">
                        <div class="d-flex justify-content-between">
                         <strong> {{ session('message') }}</strong>
                         <button class="btn btn-danger right" type="button"  class="close" data-dismiss="alert">X</button>
                        </div>
                </div>
                @endif


            </div>
          </div>
          <!-- /.dropdown -->

          <div class="clear"></div>
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->

      <div class="clear"></div>
    </div>
    <!--/ #topbar-inner -->
  </div>
  <!--/ #section-topbar -->

  <div id="headerwrap" style="background:url({{ asset($image ?? "") }})no-repeat center top;background-size: cover!important;background-position: center center!important;min-height:100vh;">
    <div class="container">
        <div clas="row centered">
            <div class="col-md-12" style="min-height:30vh!important;"></div>
        </div>
      <div class="row centered">
        <div class="col-md-12">
          <h1>{{ $name }}</h1>
          <h3>{{ $genera }} | {{ $email }}</h3>
        </div>
        <!--/.col-lg-12 -->
      </div>
      <!--/.row -->
    </div>
    <!--/.container -->
  </div>
  <!--/.#headerwrap -->


  <section id="about" name="about">
    <div id="intro">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-lg-offset-1">
            <h5>ABOUT</h5>
          </div>
          <div class="col-lg-6">
            <p>{{  $about}}</p>
          </div>
          <div class="col-lg-3">
            <p><a href="#"><i class="icon-file"></i></a>
              <sm>DOWNLOAD PDF</sm>
            </p>
          </div>

        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/ #intro -->
  </section>


  <section id="resume" name="resume">
    <!--EDUCATION DESCRIPTION -->
    <div class="container desc">
        <div class="">
            <h5>EDUCATION</h5>
            <br>
          </div>
      <div class="row" style="padding-left:100px!important;">

        @if(!is_null($education))
        @foreach($education as $item)

        <div class="col-md-9 ">
            <p>
              <t>{{ $item->title }}</t><br/> {{ $item->institution }} <br/>
              <i>{{ $item->years }} Years Course</i>
            </p>
          </div>
          <div class="col-lg-3">
            <p>
              <sm>GRADUATING IN {{ $item->graduating_in }}</sm><br/>
              <imp>
                <sm>{{ $item->status }}</sm>
              </imp>
            </p>
          </div>
        @endforeach
        @endif
      </div>
      <!--/.row -->
      <br>
      <hr>
    </div>
    <!--/.container -->
  </section>


  <!--WORK DESCRIPTION -->
  <div class="container desc" id="work">
    <div class="">
        <h5>WORK</h5>
      </div>
    <div class="row" >
        @if(!is_null($work_field))
        @foreach($work_field as $item)

        <div style="padding-left:100px!important;">
            <div class="col-md-9">
                <p>
                  <t>{{ $item->title }}</t><br/>{{ $item->company }}<br/>
                </p>
                <p>
                  <more>{{ $item->description }}</more>
                </p>
              </div>
              <div class="col-md-3">
                <p>
                  <sm>{{ $item->from }} - {{ $item->to }}</sm>
                </p>
              </div>
        </div>
        @endforeach

      @endif
    </div>
    <!--/.row -->
    <br>
    <hr>
  </div>
  <!--/.container -->


  <!--AWARDS DESCRIPTION -->
  @if(!is_null($awards))
  <div class="container desc">
    <div class="">
        <h5>AWARDS</h5>
      </div>
   @foreach($awards as $award)
   <div class="row" style="padding-left:100px!important;">

    <div class="col-md-8">
      <p>
        <t>{{ $award->award }}</t><br/> {{ $award->given_by }} <br/>
      </p>
      <p>
          <more>
              {{ $award->description }}
          </more>
      </p>
    </div>
    <div class="col-md-2">
          <p><small>{{ $award->date }}</small></p>
    </div>

  </div>
   @endforeach
    <!--/.row -->
    <br>
  </div>
  @endif
  <!--/.container -->


  <!--SKILLS DESCRIPTION -->
  <div id="" style="padding:20px; background-color:#bce5e5;">
    <div class="container-fluid">
        <h1 style="margin-left: 10rem; ">Skills</h1>
      <div class="row">
        <div class="">

        </div>
        @if(!is_null($skills))
        @foreach($skills as $key => $value)
        <div class="">

            <h4>{{ $key}}</h4>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:{{ $value }}%;" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="50">
            </div>
        </div>
        @endforeach
        @endif

        </div>
      <!--/.row -->
      <br>
    </div>
    <!--/.container -->
  </div>
  <br>
  <!--/ #skillswrap -->
<hr style="color:white; background-color:black;">

<br>
<!--Contact Section-->
  <section id="contact" name="contact">
    <!--FOOTER DESCRIPTION -->
    <div id="footwrap">
      <div class="container">
        <div class="row">

          <div class="col-lg-2">
            <h5>CONTACT</h5>
          </div>
          <div class="col-lg-4">
            <p>
              <t>Email</t><br/> {{$email ?? "" }}<br/>
            </p>
            <p>
              <t>Adress</t><br/>{{ $address ?? "" }}
            </p>
            <p>
              <t>Phone</t><br/> {{ $phone_no ?? "" }}<br/>
            </p>
            <p>
              <t>Social Links</t><br/>
              @if(!is_null($social_links))
              @foreach($social_links as $key => $value)
              <a href="{{$value }}"><i class="fa fa-{{ $key }}"></i></a>
              @endforeach

              @endif
            </p>
          </div>
          <div class="col-lg-6">
            <p>
              <sm>CONTACT FORM</sm>
            </p>
            <form action="{{route('contact')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value={{ $id }}>
              <div class="form-group">
                <label for="contact-name">Your Name</label>
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-email">Your Email</label>
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="contact-message">Your Message</label>
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-large" style="background-color:#44bbaa;color:white;">Send Message</button>
              </div>

            </form>

          </div>
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/ #footer -->
  </section>
  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('lib/php-mail-form/validate.js') }}"></script>
  <script src="{{ 'lib/chart/chart.js' }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script>
      function cross() {
           document.getElementById("cross").style.display= none;
    }
  </script>
</body>
</html>
