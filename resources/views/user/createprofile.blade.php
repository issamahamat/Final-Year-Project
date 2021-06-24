@extends("userlayout")

@section("content")

<style media="screen">
body{
  background: -webkit-linear-gradient(left, #E8EAEA, #E1F6F5);
}
.emp-profile{
  padding: 3%;
  margin-top: 3%;
  margin-bottom: 3%;
  border-radius: 0.5rem;
  background: #fff;
}
.profile-img{
  text-align: center;
}
.profile-img img{
  width: 70%;
  height: 100%;
}
.profile-img .file {
  position: relative;
  overflow: hidden;
  margin-top: -20%;
  width: 70%;
  border: none;
  border-radius: 0;
  font-size: 15px;
  background: #212529b8;
}
.profile-img .file input {
  position: absolute;
  opacity: 0;
  right: 0;
  top: 0;
}
.profile-head h5{
  color: #333;
}
.profile-head h6{
  color: #0062cc;
}
.profile-edit-btn{
  border: none;
  border-radius: 1.5rem;
  width: 70%;
  padding: 2%;
  font-weight: 600;
  color: #6c757d;
  cursor: pointer;
}
.proile-rating{
  font-size: 12px;
  color: #818182;
  margin-top: 5%;
}
.proile-rating span{
  color: #495057;
  font-size: 15px;
  font-weight: 600;
}
.profile-head .nav-tabs{
  margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
  font-weight:600;
  border: none;
}
.profile-head .nav-tabs .nav-link.active{
  border: none;
  border-bottom:2px solid #0062cc;
}
.profile-work{
  padding: 14%;
  margin-top: -15%;
}
.profile-work p{
  font-size: 12px;
  color: #818182;
  font-weight: 600;
  margin-top: 10%;
}
.profile-work a{
  text-decoration: none;
  color: #495057;
  font-weight: 600;
  font-size: 14px;
}
.profile-work ul{
  list-style: none;
}
.profile-tab label{
  font-weight: 600;
}
.profile-tab p{
  font-weight: 600;
  color: #0062cc;
}

.center {
  margin: auto;
  width: 50%;
  padding: 10px;
}

.line{

    height:20px;
    border-width:0;

    background-image:linear-gradient(to left, #E8EAEA, #E1F6F5);

}
</style>

<div class="col-12 col-md-6" style="margin: auto;">
  @foreach($errors->all() as $error)
  <div class="alert alert-danger mt-4">
    {{$error}}
  </div>
  @endforeach

</div>

<div class="container emp-profile mt-4">

  <form action="{{url('/insertprofile')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="center">

          <div class="profile-img">
              <img src="{{ url('images/pimage.png') }}" width="50" height="50">

              <input type="file" name="image" style="margin-left:110px; margin-top:20px" value="{{old('image')}}">
          </div>

    </div>

<hr class="line">

    <div class="form-row">
      <input type="hidden" class="form-control" name="userid" value="{{Auth::user()->id}}">
      <div class="form-group col-md-6">
        <label for="Name">Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="name" value="{{Auth::user()->name}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" value="{{Auth::user()->email}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Name">Phone</label>
        <input type="text" class="form-control" id="inputEmail4" name="phone" value="{{old('phone')}}">
      </div>
      <div class="form-group col-md-6">
        <label for="Profession">Profession</label>
        <input type="text" class="form-control" id="inputEmail4" name="profession" value="{{old('profession')}}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputCity">Skill 1</label>
        <input type="text" class="form-control" id="inputCity" name="skillone" value="{{old('skillone')}}">
      </div>
      <div class="form-group col-md-3">
        <label for="inputState">Skill 2</label>
        <input type="text" class="form-control" id="inputCity" name="skilltwo" value="{{old('skilltwo')}}">
      </div>
      <div class="form-group col-md-3">
        <label for="inputZip">Skill 3</label>
        <input type="text" class="form-control" id="inputZip" name="skillthree" value="{{old('skillthree')}}">
      </div>
      <div class="form-group col-md-3">
        <label for="inputZip">Skill 4</label>
        <input type="text" class="form-control" id="inputZip" name="skillfour" value="{{old('skillfour')}}">
      </div>
    </div>

    <hr class="line">

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="Profession">Resume / CV Drive Link</label>
        <input type="text" class="form-control" id="inputEmail4" name="resume" value="{{old('protfolio')}}">
      </div>
      <div class="form-group col-md-12">
        <label for="Name">Website Link</label>
        <input type="text" class="form-control" id="inputEmail4" name="website" value="{{old('website')}}">
      </div>
      <div class="form-group col-md-12">
        <label for="Profession">E-protfolio Link</label>
        <input type="text" class="form-control" id="inputEmail4" name="protfolio" value="{{old('protfolio')}}">
      </div>
    </div>

      <hr class="line">


    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">Language 1</label>
        <input type="text" class="form-control" id="inputCity" name="languageone" value="{{old('languageone')}}">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Language 2</label>
        <input type="text" class="form-control" id="inputCity" name="languagetwo" value="{{old('languagetwo')}}">
      </div>
      <div class="form-group col-md-4">
        <label for="inputZip">Language 3</label>
        <input type="text" class="form-control" id="inputZip" name="languagethree" value="{{old('languagethree')}}">
      </div>
    </div>


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Name">Nationality</label>
        <input type="text" class="form-control" id="inputEmail4" name="nationality" value="{{old('nationality')}}">
      </div>
      <div class="form-group col-md-6">
        <label for="Name">Residence Country</label>
        <input type="text" class="form-control" id="inputEmail4" name="residence" value="{{old('residence')}}">
      </div>
    </div>


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">State</label>
        <input type="text" class="form-control" id="inputCity" name="state" value="{{old('state')}}">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">City</label>
        <input type="text" class="form-control" id="inputCity" name="city" value="{{old('city')}}">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="zip" value="{{old('zip')}}">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="address" value="{{old('address')}}">
    </div>
    </div>

      <hr class="line">

    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="exampleFormControlTextarea1">About Me</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="aboutme" value="">
      {{old('aboutme')}}</textarea>
    </div>
    </div>


    <button type="submit" class="btn btn-primary">Update Profile</button>
  </form>
    </div>

        @endsection
