@extends("adminlayout")

@section("content")
<style>
.center {

margin: auto;
width: 60%;
padding-top: 50px;

}

}
</style>

<div class="col-12 col-md-6" style="margin: auto;">
  @foreach($errors->all() as $error)
  <div class="alert alert-danger mt-4">
    {{$error}}
  </div>
  @endforeach

</div>

<div class="container-fluid">
  <div class="center">


<div class="card" style="border: 3px outset black">

<h3 class="card-header" style="text-align:center; background-color:#E9E9EA">Send Message To This Applicant</h3>

<div class="card-body bg-light">
<form action="{{url('/insertmessage')}}" method="post">
  @csrf
  <div class="form-row">
  <input type="hidden" class="form-control" name="userid" value="{{$snedtos->id}}">
  <div class="form-group col-md-6 mt-4">
    <label for="">Applicant Name</label>
    <input type="text" class="form-control" name="name" value="{{$snedtos->name}}">
  </div>
  <div class="form-group col-md-6 mt-4">
    <label for="inputEmail4">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$snedtos->email}}">
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12 mt-4">
    <label for="">Subject</label>
    <input type="text" class="form-control" name="subject" value="">
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-12 mt-4">
    <label for="">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="content"></textarea>
    <div class="form-group mt-5" style="text-align:center">
    <button type="submit" class="btn btn-dark" style="text-align:center">Send Message</button>
    </div>
  </div>
  </div>
  </div>

</form>
</div>
</div>
</div>
</div>

@endsection
