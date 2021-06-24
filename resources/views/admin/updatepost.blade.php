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



<div class="container-fluid">
  <div class="center">

    <div class="col-12 col-md-12">
      @foreach($errors->all() as $error)
      <div class="alert alert-danger mt-4">
        {{$error}}

      </div>
      @endforeach

    </div>

<div class="card" style="border: 3px outset black">

<h1 class="card-header" style="text-align:center; background-color:#E9E9EA">Update Post</h1>

<div class="card-body bg-light">
<form action="{{url('/updatepost/'. $edposts->post_id)}}" method="post">
  @csrf
  <div class="form-row">
  <input type="hidden" class="form-control" name="userid" value="{{$edposts->post_user}}">
  <div class="form-group col-md-6 mt-4">
    <label for="">Job Title</label>
    <input type="text" class="form-control" name="title" value="{{$edposts->post_title}}">
  </div>
  <div class="form-group col-md-6 mt-4">
  <label for="">Job Type</label>
  <select class="form-control" id="exampleFormControlSelect1" name="jobtype">
    <option></option>
    @foreach ($categories as $category)

    <option value="{{$category->job_type}}">{{$category->job_type}}</option>

    @endforeach
  </select>
  </div>

  </div>
  <div class="form-row">
    <div class="form-group col-md-6 mt-4">
      <label for="">Company Name</label>
      <input type="text" class="form-control" name="company" value="{{$edposts->company}}">
    </div>
    <div class="form-group col-md-6 mt-4">
    <label for="">Salary</label>
    <input type="text" class="form-control" name="salary" value="{{$edposts->salary}}">
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6 mt-4">
    <label for="">Time and Schedule</label>
    <input type="text" class="form-control" name="schedule" value="{{$edposts->schedule}}">
  </div>
  <div class="form-group col-md-6 mt-4">
    <label for="">Location</label>
    <input type="text" class="form-control" name="location" value="{{$edposts->location}}">
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-12 mt-4">
    <label for="">Job Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="description">
    {{$edposts->description}}
  </textarea>
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-12 mt-4">
    <label for="">Job Requirements</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="requirements">
    {{$edposts->requirements}}
  </textarea>
    <div class="form-group mt-5" style="text-align:center">
    <button type="submit" class="btn btn-dark" style="text-align:center">Update</button>
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
