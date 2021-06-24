<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class c_post extends Controller
{
    public function showpost(){
      $posts = Post::orderBy('post_id', 'desc')->paginate(10);

      return view('admin.admin', compact('posts'));
    }



    public function showpostuser(){
      $id = Auth::id();

      if(Profile::where('userid', $id)->exists()){

        $postuser = Post::orderBy('post_id', 'desc')->paginate(10);
        $ldate = date('d-m-Y');
        return view('user.user', compact('postuser'));

      }
      else {

      $postuser = Post::orderBy('post_id', 'desc')->paginate(10);
      $ldate = date('d-m-Y');
      $warning = "Please update your profile";

      return view('user.userno', compact('postuser'));
    }


    }


    public function applypost($post_id){

      $id = Auth::id();

      $posts = Post::where('post_id', '=' , $post_id)->get();
      $profiles = Profile::find($id);
      return view('user.apply', compact('posts', 'profiles'));
    }

    public function newpost(){
      $categories = Category::all();

      return view('admin.newpost', compact('categories'));
    }


    public function insertpost(Request $request){

      $request->validate([
        "title" => "required |max:50",
        "company" => "required |max:50",
        "location" => "required",
        "jobtype" => "required",
        "salary" => "required",
        "schedule" => "required",
        "description" => "required |max:500",
        "requirements" => "required |max:500",
      ]);

      $newpost = new Post;
      $newpost->post_title = request("title");
      $newpost->company = request("company");
      $newpost->location = request("location");
      $newpost->salary = request("salary");
      $newpost->schedule = request("schedule");
      $newpost->description = request("description");
      $newpost->requirements = request("requirements");
      $newpost->post_user = request("userid");
      $newpost->post_type = request("jobtype");
      $newpost->save();

      return redirect('/admin');
    }

    public function editpost($post_id){

      $edposts = Post::find($post_id);
      $categories = Category::all();
      return view("admin.updatepost", compact('edposts', 'categories'));
    }

    public function updatepost($post_id){

      $uppost = Post::find($post_id);
      $uppost->post_title = request("title");
      $uppost->company = request("company");
      $uppost->location = request("location");
      $uppost->salary = request("salary");
      $uppost->schedule = request("schedule");
      $uppost->description = request("description");
      $uppost->requirements = request("requirements");
      $uppost->post_user = request("userid");
      $uppost->post_type = request("jobtype");
      $uppost->save();

      return redirect('/admin');
    }


    public function deletepost($post_id){

      $profiles = Post::find($post_id)->delete();
      return redirect('/admin');
    }
}
