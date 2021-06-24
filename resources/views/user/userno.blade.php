@extends("userlayout")

@section("content")


<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
}
</style>

<body>

<div class="container-fluid">

  <div class="center">
    <div class="alert alert-danger" style="width:37%; height:7%">
      <h4>Your Profile is Empty !!! <a href="{{url('/showprofile')}}">Please Click Here To Update</a> </h4>
    </div>
  </div>

  <h2 style="margin-left:20px; margin-top:30px">RECENT JOB UPDATES</h2>

  <div class="row">
    <div class="col-12 col-md-8">


      @foreach ($postuser as $post)


      <div class="card mb-3 mt-4 ml-3" style="border: 1px outset black">
         <h5 class="card-header"><i class="fa fa-briefcase" aria-hidden="true"></i> {{$post->post_title}}
           <span class="badge badge-secondary" style="float:right">Posted on: {{$post->created_at}}</span></h5>
            <div class="card-body">
              <p class="card-text"><i class="fa fa-building" aria-hidden="true"></i><b> Company Name: </b>{{$post->company}}</p>
              <hr>
              <p class="card-text"><i class="fa fa-map-marker"></i> {{$post->location}}</p>
              <hr>
              <p class="card-text"><i class="fa fa-money" aria-hidden="true"></i>  RM{{$post->salary}}</p>
              <hr>
              <p class="card-text"><h5><i class="fa fa-asterisk" aria-hidden="true"></i> Job Description</h5>{{$post->description}}</p>

              <p>
              <a class="btn btn-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
              aria-controls="collapseExample">
                Read more
              </a>
              </p>
              <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <p class="card-text"><h5><i class="fa fa-graduation-cap" aria-hidden="true"></i> Job Requirements</h5>{{$post->requirements}}</p>
                <hr>
                <p class="card-text"><i class="fa fa-handshake-o" aria-hidden="true"></i> {{$post->post_type}}</p>
                <hr>
                <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$post->schedule}}</p>
                <div class="card-footer">
                  <h4 style="color:red">You can not Apply. Your Profile has no information. Please Update
                    <a href="{{url('/showprofile')}}" class="btn btn-danger" style="float:right">Update Now</a></h4>
                </div>
              </div>




              </div>


            </div>
        </div>
        @endforeach
     </div>

     <div class="col-12 col-md-4">
       <div class="card mt-4" style="border: 1px outset black">
          <h5 class="card-header">Get new jobs for this search by email</h5>
            <div class="card-body">
              <div class="col-12 col-md-12">
                <label for="">My Email</label>
                <input type="text" class="form-control" name="title" value="">
                <a href="#" class="btn btn-dark mt-3">Send Me</a>
              </div>
             </div>
         </div>
     </div>


  </div>


</div>




@endsection

</body>
