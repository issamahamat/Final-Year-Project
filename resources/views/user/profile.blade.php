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

.profile-work a:hover{
  text-decoration: none;
  color: blue;
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
</style>

@foreach($profiles as $profile)
<div class="container emp-profile mt-4">
            <form action="{{url('/editprofile', $profile->userid)}}" action="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ asset('images/' . $profile->image) }}" alt=""/>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>

                                        {{$profile->name}}

                                    </h5>
                                    <h6>
                                    {{$profile->profession}}
                                    </h6><hr>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">About Me</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">

                     <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">


                          <p style="color:blue">SKILLS</p>
                          <a >{{$profile->skillone}}</a><br>
                          <a >{{$profile->skilltwo}}</a><br>
                          <a >{{$profile->skillthree}}</a><br>
                          <a >{{$profile->skillfour}}</a>

                          <hr>
                          <p style="color:blue">LANGUAGES</p>
                          <a >{{$profile->languageone}}</a><br>
                          <a >{{$profile->languagetwo}}</a><br>
                          <a >{{$profile->languagethree}}</a>

                          <hr>
                          <p style="color:blue">LINKS</p>
                          <a href="{{$profile->website}}">Website Link</a><br/>
                          <a href="{{$profile->protfolio}}">E-Portfolio Link</a><br/>
                          <a href="{{$profile->website}}">Resume / CV</a><br/>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->phone}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->profession}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nationality</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->nationality}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Residence Place</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->residence}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>State</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->state}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->city}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Zip Code</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->zip}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adress</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$profile->address}}</p>
                                            </div>
                                        </div>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">




                                <div class="row">
                                    <div class="col-md-9">

                                        <p style="color:black">{{$profile->aboutme}}</p>
                                    </div>
                                </div>







                        </div>
                    </div>
                </div>
            </form>
        </div>

        @endforeach

        @endsection
