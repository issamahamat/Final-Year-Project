<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class c_profile extends Controller
{
  public function showprofile(Request $request){

    $id = Auth::id();

    if(Profile::where('userid', $id)->exists()){
      $profiles = Profile::where('userid','=', $id)->get();
      return view("user.profile", compact("profiles"));
    }
    else {
      return view("user.newprofile");
    }

  }


  public function insertprofile(Request $request){

    $request->validate([
      "name" => "required",
      "email" => "required",
      "phone" => "required",
      "profession" => "required",
      "skillone" => "required",
      "skilltwo" => "required",
      "skillthree" => "required",
      "skillfour" => "required",
      "resume" => "required",
      "website" => "required",
      "protfolio" => "required",
      "languageone" => "required",
      "languagetwo" => "required",
      "languagethree" => "required",
      "nationality" => "required",
      "residence" => "required",
      "state" => "required",
      "city" => "required",
      "zip" => "required",
      "address" => "required",
      "aboutme" => "required",
      "image" => "required",
    ]);

    if(request()->hasFile('image')){

      $image = $request->file('image');
      $imageExt = $request->file('image')->extension();
      $imageName = time() . '.' . $imageExt;
      $destination_path = public_path('/images');
      $image->move($destination_path, $imageName);

      $adprof = new Profile;
      $adprof->userid = request("userid");
      $adprof->name = request("name");
      $adprof->email = request("email");
      $adprof->phone = request("phone");
      $adprof->profession = request("profession");
      $adprof->skillone = request("skillone");
      $adprof->skilltwo = request("skilltwo");
      $adprof->skillthree = request("skillthree");
      $adprof->skillfour = request("skillfour");
      $adprof->resume = request("resume");
      $adprof->website = request("website");
      $adprof->protfolio = request("protfolio");
      $adprof->languageone = request("languageone");
      $adprof->languagetwo = request("languagetwo");
      $adprof->languagethree = request("languagethree");
      $adprof->nationality = request("nationality");
      $adprof->residence = request("residence");
      $adprof->state = request("state");
      $adprof->city = request("city");
      $adprof->zip = request("zip");
      $adprof->address = request("address");
      $adprof->aboutme = request("aboutme");
      $adprof->image = $imageName;
      $adprof->save();
    }
    else{
      return back()->with('msg', 'Please choose image');
    }

      return redirect('/showprofile');

    }

    public function editprofile($userid){

      $profiless = Profile::find($userid);
      return view("user.uppdateprofile", compact("profiless"));
    }

    // public function applypost($userid){
    //
    //   $profiless = Profile::find($userid);
    //   return view("user.apply", compact("profiless"));
    // }



    public function updateprofile(Request $request, $userid){

      $request->validate([
        "name" => "required",
        "email" => "required",
        "phone" => "required",
        "profession" => "required",
        "skillone" => "required",
        "skilltwo" => "required",
        "skillthree" => "required",
        "skillfour" => "required",
        "resume" => "required",
        "website" => "required",
        "protfolio" => "required",
        "languageone" => "required",
        "languagetwo" => "required",
        "languagethree" => "required",
        "nationality" => "required",
        "residence" => "required",
        "state" => "required",
        "city" => "required",
        "zip" => "required",
        "address" => "required",
        "aboutme" => "required",
        "image" => "required",
      ]);

      if(request()->hasFile('image')){

        $image = $request->file('image');
        $imageExt = $request->file('image')->extension();
        $imageName = time() . '.' . $imageExt;
        $destination_path = public_path('/images');
        $image->move($destination_path, $imageName);

        $updprof = Profile::find($userid);
        $updprof->userid = request("userid");
        $updprof->name = request("name");
        $updprof->email = request("email");
        $updprof->phone = request("phone");
        $updprof->profession = request("profession");
        $updprof->skillone = request("skillone");
        $updprof->skilltwo = request("skilltwo");
        $updprof->skillthree = request("skillthree");
        $updprof->skillfour = request("skillfour");
        $updprof->resume = request("resume");
        $updprof->website = request("website");
        $updprof->protfolio = request("protfolio");
        $updprof->languageone = request("languageone");
        $updprof->languagetwo = request("languagetwo");
        $updprof->languagethree = request("languagethree");
        $updprof->nationality = request("nationality");
        $updprof->residence = request("residence");
        $updprof->state = request("state");
        $updprof->city = request("city");
        $updprof->zip = request("zip");
        $updprof->address = request("address");
        $updprof->aboutme = request("aboutme");
        $updprof->image = $imageName;
        $updprof->save();
        }else{
          return back()->with('msg', 'Please choose image');
        }
        return redirect('/showprofile');
}

}
