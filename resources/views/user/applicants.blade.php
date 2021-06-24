@extends("userlayout")

@section("content")
<style>
.center{
     margin: auto;
     width: 80%;
     padding-top: 50px;
   }
 }
</style>

<div class="container-fluid">
<div class="center">


  <h1 style="text-align:center">Job Applicants</h1><br>
<div class="card" style="border: 3px outset black">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">View Profile</th>
      <th scope="col">View Resume</th>
      <th scope="col">View Website</th>
      <th scope="col">Send Message</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($applicants as $applicant)

    <tr>
    <th scope="row"><input type="checkbox" name="" value=""> {{$appno++}}</th>
      <td>{{$applicant->name}}</td>
      <td>{{$applicant->email}}</td>
      <td>{{$applicant->phone}}</td>
      <td><a href="{{url('/candprofile', $applicant->userid)}}" class="btn btn-info" target="_blank"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></td>
      <td><a href="{{$applicant->resume}}" class="btn btn-primary" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i> Resume</a></td>
      <td><a href="{{$applicant->website}}" class="btn btn-secondary" target="_blank"><i class="fa fa-link" aria-hidden="true"></i> Website</a></td>
      <td><a href="{{url('/senduser', $applicant->userid)}}" class="btn btn-success"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send Message</a></td>
      <td>

        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter" style="margin-right:20px;">
          <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Deleting An Applicant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are You Sure You want to delete this Applicant
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                <a href="{{url('/deleteapplicant', $applicant->id)}}" class="btn btn-danger" style="margin-right:20px;"> Yes Delete</a>
              </div>
            </div>
          </div>
        </div>



      </td>

    </tr>
    @endforeach
  </tbody>
</table>

</div><br><br>
<div class="" style="text-align:center">
  <a href="" class="btn btn-success"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send To All Selected</a>
  <a href="" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete All Selected</a>
  <a href="{{url('/admin')}}" class="btn btn-dark"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Posts Page</a>
</div>

</div>
</div>
@endsection
