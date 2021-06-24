<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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

      <a class="navbar-brand" href="#">
        <img src="{{ url('images/jvlogo.jpg') }}" width="30" height="30" alt="">
      </a>



  <div class="collapse navbar-collapse" id="navbarNavDropdown">


    <ul class="navbar-nav">
      @guest
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/sample')}}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('/newpost')}}">New Post</a>
          <a class="dropdown-item" href="{{url('/admin')}}">Manage Posts</a>
          <a class="dropdown-item" href="{{url('/sample')}}">Manage Interns</a>
          <a class="dropdown-item" href="{{url('/sample')}}">Manage Companies</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/postuser')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/policies')}}">Policies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
      </li>

      @endguest

    </ul>

  </div>

  <div>

    <ul class="navbar-nav">

@guest
      <li class="nav-item">
        <a class="nav-link" href="{{url('/register')}}"><i class="fa fa-hand-o-up" aria-hidden="true"></i> Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
      </li>
@else
      <li class="nav-item">
        <a class="nav-link" href="#">{{Auth::user()->name}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Chat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/logout')}}">Logout</a>
      </li>
@endguest

    </ul>

  </div>

</nav>



    @yield("content")




  <!-- <footer>
    <div class="card bg-dark mt-4">
    <div class="card-body" style="color:white">
      This is Footer
    </div>
  </div>

  </footer> -->
</body>

</html>
