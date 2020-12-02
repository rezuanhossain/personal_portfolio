<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page - Easy Protfolio </title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/landing-page.min.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <h1 class="navbar-brand" href="#"><i>Simple Portfoili Builder<i></h1>
        @if (auth()->user())
        <a  class="btn btn-success" href="{{ route('homepage',['id'=>auth()->user()->id]) }}">Your Page <i style="margin-left:5px; " class="fa fa-arrow-right"></i></a>
        @else
        <a  class="btn btn-success" href="{{ route('login') }}">Login <i style="margin-left:5px; " class="fa fa-arrow-right"></i></a>

        @endif
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-10 col-md-10 col-sm-12 mx-auto">
          <h1 class="mb-5">Build a portfoli for you or browse others'</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input id="query" type="email" class="form-control form-control-lg" placeholder="Enter email to find someone's portfolio...">
              </div>
              <div class="col-12 col-md-3">
                <label id="search"  onclick="search()" class="btn btn-block btn-lg btn-primary">Search<i style="padding-left:10px;" class="fa fa-search"></i></label>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="container" id="result"></div>

                    </div>
                </div>
            </div>

        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Fully Responsive</h3>
            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Bootstrap 4 Ready</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  @guest
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">

      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">


            <div class="form-row">

              <div class="col-12 col-md-4 offset-4">

                @if (Route::has('register'))
                <a  class="btn btn-block btn-lg btn-primary" href="{{ route('register') }}">Sign up!</a>
               @endif

              </div>
            </div>


        </div>
      </div>

    </div>
  </section>
  @endguest
  <hr/>
  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Auntu Ahmed 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<script>
function search(){
    var query=document.getElementById('query').value.toString();
    // ajax call
    var xhttp = new XMLHttpRequest();
              xhttp.open("GET", `/search-user/${query}`, true);
              xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
              xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {

                      // Response
                      var response = this.response;
                      var res=JSON.parse(response);
                      console.log(res[0].message);
                      var image;
                        if(res.image){
                            image=res.image;
                        }
                        image="avatar.jpg";
                        var result=document.getElementById('result');
                       if(res[0].message ==="result found"){
                         result.innerHTML=`
                        <br>
                        <h3 style="color:#00973E;text-aling:center;"> Search Results...!</h3>
                            <div class="card" >
                                <img class="card-img-top" src="../../images/${image}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 style="z-index:100; color:black;" class="">${res[0].name}</h5>
                                    <p class="" style="z-index:100; color:black;">${res[0].email}</p>
                                    <a href="/landing/${res[0].id}" class="btn btn-primary">See the Portfolio</a>
                                </div>
                            </div>
                        `;
                       }
                       else{
                         result.innerHTML=`
                            <br>
                            <h2 style="color:red;">${res[0].message}</h2>
                        `;
                       }


                  }
                };
                xhttp.send();
}
</script>

</body>

</html>
