<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Message;
use App\Models\User;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class c_message extends Controller
{
    //
    public function insertmessage(Request $request){

      $request->validate([
        "name" => "required",
        "email" => "required",
        "subject" => "required",
        "content" => "required",
      ]);

        $msg = new Message;
        $msg->userid = request("userid");
        $msg->name = request("name");
        $msg->email = request("email");
        $msg->subject = request("subject");
        $msg->content = request("content");
        $msg->save();

        return redirect('/admin');

      }



      public function viewmessages(Request $request){

        $id = Auth::id();

        $messages= Message::where('userid', '=' , $id)->get();

        return view("user.usermsg", compact("messages"));
      }
}
