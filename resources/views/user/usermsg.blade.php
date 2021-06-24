@extends("userlayout")

@section("content")
<style>
.center{
     margin: auto;
     width: 65%;
     padding-top: 50px;
   }
 }
</style>

<div class="container-fluid">
<div class="center">

  <div id="accordion">

    <h2 style="text-align:center">Messages</h2><br>

@foreach($messages as $message)
    <div class="card">
      <div class="card-header bg-dark" id="headingOne">
        <h2> <span class="badge badge-secondary" style="float:right">New</span></h2>
        <h5 class="mb-0">
          <button class="btn btn-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
           <h4>{{$message->subject}}
               <i class="fa fa-angle-double-down" aria-hidden="true"></i>
             </h4>
          </button>
        </h5>
      </div>

      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          {{$message->content}}

        </div>
      </div>
    </div>
    <hr style="background-color:grey">
@endforeach



  </div>


</div>
</div>

@endsection
