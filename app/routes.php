<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Homepage
Route::get('/',function(){
  return View::make('home');
});
//register page
Route::get('/register',function(){
  return View::make('auth.register');
});
//register page post data
Route::post('/register','AuthController@register');
//user login to website
Route::post('/login', function(){
  $credentials = Input::only('username', 'password');
  if(Auth::attempt($credentials)){
    return Redirect::to('showprofile');
  }
  return Redirect::to('register');
});
//user logout
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('register');
});
//buildprofile page
Route::get('/buildprofile',function(){
  return View::make('profile.buildprofile') ->(UserStatus::$message);

});
//buildprofile page post data
Route::post('/buildprofile','AuthController@new_user');
//show user's profile page
Route::get('/showprofile',array(
    'uses'=>'ProfileController@showprofile'
  ));
//edit user's profile page
Route::get('editprofile/{username}',array(
    'as'=>'editprofile-user',
    'uses'=>'ProfileController@edit'
  ));
//editprofile page post data
Route::post('editprofile/{username}',array(
   'as'=>'editprofile-user',
    'uses'=>'ProfileController@update'
  ));
//when user forgot password
Route::get('/forgot-password',array(
    'uses'=>'AuthController@get_forgotPassword'
  ));
//forgot-password post data
Route::post('/forgot-password',array(
    'uses'=>'AuthController@post_forgotPassword'
  ));
//user change user's password
Route::get('/change-password/{username}',array( 
  'as'=>'change-password-user',
    'uses'=>'AuthController@get_updatepassword'
  ));
//when user change password success
Route::get('/change_password_success',function(){
  return View::make('auth.change_password_success');
});
//update user's password to new password
Route::post('/change-password/{username}',array(
  'as'=>'change-password-user',
    'uses'=>'AuthController@post_updatePassword'
  ));
//Show all user in system
Route::get('/profile',array(
    'as'=>'profile-Auth::user()',
    'uses'=>'LikeController@show_all_users'
  ));
//show other user's profile that selected
Route::get('/profile/{username}',array(
    'as'=>'profile-user',
    'uses'=>'LikeController@other_user_profile'
  ));
//when user like other user
Route::get('profile/{username}/like',array(
    'as'=>'profile-user-like',
    'uses'=>'LikeController@like'
  ));
//when other user like together
Route::get('profile/{username}/likematch',array(
  'as'=> 'profile-user-likematch',
  'uses'=>'LikeController@likematch'
  ));
//when user dislike other user
Route::get('profile/{username}/dislike',array(
    'as'=>'profile-user-dislike',
    'uses'=>'LikeController@dislike'
  ));
//show all user that like together
Route::get('/show_all_friends',array(
    'uses'=>'LikeController@all_friend'
  ));
//show all user that user like but don't like together
Route::get('/show_all_likes',array(
    'uses'=>'LikeController@all_like'
  ));
//send message to other user that like together
Route::get('/profile/{username}/chatbox',array(
    'as'=>'profile-user-chatbox',
    'uses'=>'ChatController@chat'
  ));
//chatbox page post data
Route::post('/profile/{username}/chatbox',array(
    'as'=>'profile-user-chatbox-send',
    'uses'=>'ChatController@send_message'
  ));
//show message that user receive
Route::get('/receive-message',array(
    'uses'=>'ChatController@receive_message'
  ));
// send virtual item to other user
Route::get('/profile/{username}/virtualitem',array(
     'as'=>'profile-user-virtualitem',
     'uses'=>'VirtualController@virtual'
   ));
//when send virtual item success
Route::get('/profile/{username}/sendvirtualsuccess/{virtualid}',array(
     'as'=>'profile-user-sendvirtualsuccess-virtualnumber',
     'uses'=>'VirtualController@sendvirtual'
   ));
//show virtual item that user receive
Route::get('/receive-virtual',array(
    'uses'=>'VirtualController@receive_virtual'
  ));
//show guideline to use the program
Route::get('/showguideline',function(){
  return View::make('profile.showguideline');
});


 ?>