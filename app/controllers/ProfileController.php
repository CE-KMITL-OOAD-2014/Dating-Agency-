<?php

class ProfileController extends BaseController {
	

    public function profile(){  

			return View::make('profile.profile')				
			->with('users',User::all());

    }
 
 
       		  
   public function edit($username){  
     	$user = User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			return View::make('profile.editprofile')
				->with('user',$user);
		}
		return App::abort(404);
    } 
	         
    public function update(){
    	$id = Input::get('id');
    	if(Input::get('firstname')!=null)  User::where('id','=',$id)->update(array('firstname'=>Input::get('firstname')));
    	if (Input::get('lastname')!=null)  User::where('id','=',$id)->update(array('lastname'=>Input::get('lastname')));
    	if (Input::get('age')!=null)  User::where('id','=',$id)->update(array('age'=>Input::get('age')));
    	if (Input::get('gender')!=null)  User::where('id','=',$id)->update(array('gender'=>Input::get('gender')));
    	if (Input::get('work')!=null)  User::where('id','=',$id)->update(array('work'=>Input::get('work')));
    	if (Input::get('interest')!=null)  User::where('id','=',$id)->update(array('interest'=>Input::get('interest')));
		if (Input::get('tel')!=null)  User::where('id','=',$id)->update(array('tel'=>Input::get('tel')));    	
    	if (Input::get('email')!=null)  User::where('id','=',$id)->update(array('email'=>Input::get('email')));
    	if (Input::get('facebook')!=null)  User::where('id','=',$id)->update(array('facebook'=>Input::get('facebook')));
    	if (Input::get('lineid')!=null)  User::where('id','=',$id)->update(array('lineid'=>Input::get('lineid')));
    	return Redirect::to('/showprofile');
    }




}
?>
		
		
