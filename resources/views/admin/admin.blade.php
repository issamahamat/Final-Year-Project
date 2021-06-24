  @extends("adminlayout")

@section("content")

<style>
.center {

margin: auto;

padding-top: 50px;

}

.line{

    height:10px;
    border-width:0;

    background-color:black;

}
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-8" style="margin: auto;">
      @foreach ($posts as $post)

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
              <hr>
              <p class="card-text"><h5><i class="fa fa-graduation-cap" aria-hidden="true"></i> Job Requirements</h5>{{$post->requirements}}</p>
              <hr>
              <p class="card-text"><i class="fa fa-handshake-o" aria-hidden="true"></i> {{$post->post_type}}</p>
              <hr>
              <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$post->schedule}}</p>
              <div class="card-footer">
              <div class="" style="text-align:center">

              <a href="{{url('/editpost', $post->post_id)}}" class="btn btn-primary" style="margin-right:20px;"><i class="fa fa-wrench" aria-hidden="true"></i> Edit Post</a>



              <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter" style="margin-right:20px;">
  <i class="fa fa-trash-o" aria-hidden="true"></i> Delete Post
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Deleting a post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure You want to delete this Post
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
        <a href="{{url('/deletepost', $post->post_id)}}" class="btn btn-danger" style="margin-right:20px;"> Yes Delete</a>
      </div>
    </div>
  </div>
</div>



              <a href="{{url('/viewapplicants', $post->post_id)}}" class="btn btn-success" style="margin-right:20px;"><i class="fa fa-eye" aria-hidden="true"></i> View Applicants</a>
              <div class="btn-group dropup">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bar-chart" aria-hidden="true"></i> Insights
              </button>
                 <div class="dropdown-menu" style="background-color: #C6C6D3">
                   <ul>
                     <li>Aplicants : 15</li>
                     <li>Selected : 3</li>
                     <li>Deleted: 1</li>
                   </ul>
                  </div>
              </div>


            </div>
            </div>

        </div>

     </div>

      @endforeach
  </div>


</div>







@endsection
