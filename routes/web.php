<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/admin', 'c_post@showpost')->middleware("auth");

Route::get('/newpost', 'c_post@newpost')->middleware("auth");

Route::get('/postuser', 'c_post@showpostuser')->middleware("auth");

Route::post('/insertpost', 'c_post@insertpost');

Route::get('/applypost/{post_id}', 'c_post@applypost');

Route::get('/profile', function(){
  return view('user.profile');
})->middleware("auth");


Route::get('/createprofile', function(){
  return view('user.createprofile');
});
Route::get('/uppdateprofile', function(){
  return view('user.uppdateprofile');
});

Route::get('/interviewtips', function(){
  return view('user.tips');
});
Route::get('/faq', function(){
  return view('user.faq');
});
Route::get('/policies', function(){
  return view('user.policies');
});
Route::get('/about', function(){
  return view('user.about');
});
Route::get('/appointments', function(){
  return view('user.appointments');
});
// Route::get('/message', function(){
//   return view('admin.message');
// });

Route::get('/usermsg', function(){
  return view('user.usermsg');
});


Auth::routes();

Route::get('/logout', function(){
  Auth::logout();

  return redirect('login');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});



Route::get('/showprofile', 'c_profile@showprofile');

Route::post('/insertprofile', 'c_profile@insertprofile');

Route::get('/editprofile/{id}', 'c_profile@editprofile');

Route::post('/updateprofile/{id}', 'c_profile@updateprofile');

Route::post('/insertapply', 'c_apply@insertapply');

Route::get('/viewapplicants/{id}', 'c_apply@viewapplicants');



Route::get('/deleteapplicant/{id}', 'c_apply@deleteapplicant');




Route::post('/insertmessage', 'c_message@insertmessage');

Route::get('/viewmessages', 'c_message@viewmessages');

Route::get('/senduser/{id}', 'c_apply@senduser');

Route::get('/deletepost/{id}', 'c_post@deletepost');

Route::get('/editpost/{id}', 'c_post@editpost');

Route::post('/updatepost/{id}', 'c_post@updatepost');

Route::get('/candprofile/{id}', 'c_apply@candprofile');
