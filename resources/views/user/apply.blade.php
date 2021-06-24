@extends("userlayout")

@section("content")

<style>
.center {

margin: auto;
width: 60%;
padding-top: 50px;


}

.line{

    height:10px;
    border-width:0;

    background-color:black;

}
</style>

<body>

<div class="container-fluid">
  <div class="row">

      @foreach ($posts as $post)
<div class="center">

  <div class="col-12 col-md-6" style="margin: auto;">
    @foreach($errors->all() as $error)
    <div class="alert alert-danger mt-4">
      {{$error}}
    </div>
    @endforeach

  </div>
      <div class="card mb-3 mt-4 ml-3" style="border: 2px outset black">
        <h5 class="card-header"><i class="fa fa-briefcase" aria-hidden="true"></i> {{$post->post_title}}
          <span class="badge badge-secondary" style="float:right">Posted on: {{$post->created_at}}</span></h5>
            <div class="card-body">
              <p class="card-text"><i class="fa fa-building" aria-hidden="true"></i> Company Name : {{$post->company}}</p>
              <hr>
              <p class="card-text"><i class="fa fa-map-marker"></i> {{$post->location}}</p>
              <hr>
              <p class="card-text"><i class="fa fa-money" aria-hidden="true"></i> Salary = RM{{$post->salary}}</p>
              <hr>
              <p class="card-text"><h5><i class="fa fa-asterisk" aria-hidden="true"></i> Job Description</h5>{{$post->description}}</p>
              <hr>
              <p class="card-text"><h5><i class="fa fa-graduation-cap" aria-hidden="true"></i> Job Requirements</h5>{{$post->requirements}}</p>
              <hr>
              <p class="card-text"><i class="fa fa-handshake-o" aria-hidden="true"></i> {{$post->post_type}}</p>
              <hr>
              <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$post->schedule}}</p>


            </div>



            <div class="card-footer" style="border-top: 2px solid black">
              <form action="{{url('/insertapply')}}" method="post" onsubmit="alert('Your Application has been Submitted Successfully. We will get back to you soon.   ...   Thank You');">
                @csrf

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <input type="hidden" class="form-control" name="userid" value="{{$profiles->userid}}">
                    <input type="hidden" class="form-control" name="postid" value="{{$post->post_id}}">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="inputEmail4" name="name" value="{{Auth::user()->name}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" value="{{Auth::user()->email}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputEmail4">Phone</label>
                    <input type="text" class="form-control" id="inputEmail4" name="phone" value="{{$profiles->phone}}">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="Name">Drop Your Resume / CV Drive link</label>
                    <input type="text" class="form-control" id="inputEmail4" name="resume" value="{{$profiles->resume}}">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="Profession">Drop Your Website / E-Portfolio Link</label>
                    <input type="text" class="form-control" id="inputEmail4" name="website" value="{{$profiles->website}}">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" id="inputCity" name="state" value="{{$profiles->state}}">
                  </div>
                  <div class="form-group col-md-4">

                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" value="{{$profiles->city}}">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="zip" value="{{$profiles->zip}}">
                  </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" name="address" value="{{$profiles->address}}">
                </div>
                </div>

                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">All Information are Correct</label>
                </div>

                <div class="" style="text-align: center; margin-top: 50px;">
                  <button type="submit" class="btn btn-dark">Submit Application</button>
                </div>
                

              </form>
            </div>

        </div>


</div>


@endforeach

  </div>

</div>



@endsection

</body>
