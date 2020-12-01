<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@auth

<a class="navbar-brand btn btn-info" style="margin-left:100px;margin-top:50px;margin-bottom:20px;color: rgb(255, 255, 255);background-color:rgb(16, 193, 199);" href="{{ route('home') }}">
  Dashboard
</a>

<div class="container">
    @if(!is_null($mails))
    <div class="row"><h1>Your Entry List</h1></div>
        @csrf

    @forelse($mails  as $item)
    <div class="card">
        <div class="shadow">

            <div class="card-header">
                <h4>Subject:{{ $item->subject }}</h4>
            </div>
            <div class="card-body">
                <p><small class="text-muted">Name: {{ $item->name }}</small></p>
                <p><small class="text-muted">From: <i>{{ $item->email }}</i></small></p>
                <p><small >Description: {{ $item->message }}</small></p>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="{{ $item->id }}">
                    <label class="form-check-label" for="exampleCheck1">Mark As Read</label>
                  </div>

            </div>


        </div>



    </div>
    <br>
    @empty
            <h1 style="color:red;">No Entry to Show...!</h1>
    <br>
    @endforelse


    @endif
    @if(is_null($mails))
    <h2 style="color:red;margin:20px;">No Unseen Contact Mails</h2>
    @endif
</div>


@endauth

<script src="plugins/jquery/jquery.min.js"></script>
<script>
 $("#exampleCheck1").click(function(){

    var status=document.getElementById('exampleCheck1').value;
    var id=document.getElementById('exampleCheck1').name;
    let _token   = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
       url: "/mails-list",
        type:"POST",
        data:{

          ckeck: status,
          id:id,
          _token: _token
        },
        success:function(response){

          console.log(response);

        },
       });
});

</script>
</body>
</html>
