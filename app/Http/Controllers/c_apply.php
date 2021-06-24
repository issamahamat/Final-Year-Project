<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Profile;
use App\Models\Candidate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class c_apply extends Controller
{
  public function insertapply(Request $request){

    $request->validate([

      "name" => "required",
      "email" => "required",
      "phone" => "required",
      "resume" => "required",
      "website" => "required",
      "state" => "required",
      "city" => "required",
      "zip" => "required",
      "address" => "required",
    ]);


      $candi = new Candidate;
      $candi->userid = request("userid");
      $candi->postid = request("postid");
      $candi->name = request("name");
      $candi->email = request("email");
      $candi->phone = request("phone");
      $candi->resume = request("resume");
      $candi->website = request("website");
      $candi->state = request("state");
      $candi->city = request("city");
      $candi->zip = request("zip");
      $candi->address = request("address");
      $candi->save();
      return redirect('/postuser');
    }

   public function viewapplicants($postid){


     $applicants = Candidate::where('postid', '=' , $postid)->get();
     $appno = 1;

     return view("user.applicants", compact("applicants", "appno"));
   }


   public function senduser($userid){

      $snedtos= User::find($userid);
     return view("admin.message", compact("snedtos"));
   }


   public function candprofile($userid){

     $profiles = Profile::where('userid','=', $userid)->get();
     return view("user.profile", compact("profiles"));
   }

   public function deleteapplicant($id){

     $profiless = Candidate::find($id)->delete();
    // $profiles = Post::find($post_id)->delete();
     return redirect('/admin');
   }



}
