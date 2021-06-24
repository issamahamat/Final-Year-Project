<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
<style media="screen">
body{
  background: -webkit-linear-gradient(left, #E8EAEA, #E1F6F5);
}

</style>


  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <a class="navbar-brand" href="{{url('/postuser')}}">
        <img src="{{ url('images/jvlogo.jpg') }}" width="30" height="30" alt="">
      </a>
      <ul class="navbar-nav">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{url('/postuser')}}">JobView</a>
        </li>
        @else
        @endguest

      </ul>



  <div class="collapse navbar-collapse" id="navbarNavDropdown">


    <ul class="navbar-nav">
      @guest
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{url('/postuser')}}"><i class="fa fa-home" aria-hidden="true"></i> Find Jobs</a>
      </li>
      @endguest


      <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/policies')}}">Policies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
      </li>


    </ul>

  </div>

  <div>

    <ul class="navbar-nav">

@guest
      <li class="nav-item">
        <a class="nav-link" href="{{url('/register')}}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
      </li>
@else
      <li class="nav-item">
        <a class="nav-link" href="/viewmessages"><i class="fa fa-comments" aria-hidden="true"></i> Messages</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/sample')}}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i> {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('/showprofile')}}"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
          <a class="dropdown-item" href="{{url('/interviewtips')}}"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Interview Tips</a>
          <a class="dropdown-item" href="{{url('/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </div>
      </li>

@endguest

    </ul>

  </div>

</nav>


@yield("content")



</body>

</html>
