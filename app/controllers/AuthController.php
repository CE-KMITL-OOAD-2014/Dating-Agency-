<?php

class AuthController extends BaseController {
	

	public function register(){
		$user = new User();

		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->age = Input::get('age');
		$user->gender = Input::get('gender');
		$user->work = Input::get('work');
		$user->interest = Input::get('interest');
		$user->tel = Input::get('tel');
		$user->email = Input::get('email');
		$user->facebook = Input::get('facebook');
		$user->lineid = Input::get('lineid');
        $user->profilepicture = Input::file('profilepicture')->getClientOriginalName();
        Input::file('profilepicture')->move('picture', $user->profilepicture);
	    $user->save();
	    
	   

        $credentials = Input::only('username', 'password');
        if(Auth::attempt($credentials)){
        return Redirect::to('/showprofile');
   		 }  	
    }

    public function profile(){  

			return View::make('/profile');

    }
 
 
       		  
   public function edit($username){  
     	$user = User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			return View::make('/editprofile')
				->with('user',$user);
		}
		return App::abort(404);
    } 

   /* public function editprofile($username){
		$user =  User::where('username','=',$username);
		User::where('username','=',$username)->update(array('username'=>Input::get('username')));
	//	User::where('id','=',$id)->update(array('firstname'=>Input::get('firstname')));
		/*$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->age = Input::get('age');
		$user->gender = Input::get('gender');
		$user->work = Input::get('work');
		$user->interest = Input::get('interest');
		$user->tel = Input::get('tel');
		$user->email = Input::get('email');
		$user->facebook = Input::get('facebook');
		$user->lineid = Input::get('lineid'); }*/
       // $user->profilepicture = Input::file('profilepicture')->getClientOriginalName();
       // Input::file('profilepicture')->move('picture', $user->profilepicture);
	    
	   

        //$credentials = Input::only('username', 'password');
        //if(Auth::attempt($credentials)){
        //return Redirect::to('/showprofile');
   		// }  	*/

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
    	return Redirect::to('showprofile');
    }

    public function get_forgotPassword(){
    	return View::make('/forgot-password');
	 }
	 public function post_forgotPassword(){
	 	$user = User::where('username','=',Input::get('username'))
	 	->where('firstname','=',Input::get('firstname'))
	 	->where('lastname','=',Input::get('lastname'))
	 	->where('email','=',Input::get('email'));
	 	if($user->count()){
	 		$user=$user->first();

	 		return View::make('/change-password')
				->with('user',$user);

	 	}
    	return Redirect::to('forgot-password');
    }
    public function get_updatePassword($username){  
     	$user = User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			return View::make('/update-password')
				->with('user',$user);
		}
		return App::abort(404);
	 }
	 public function post_updatePassword(){
	 		if(Input::get('new_password')!=null){
    			User::where('id','=',Input::get('id'))->update(array('password'=>Hash::make(Input::get('new_password'))));
    			return Redirect::to('/showprofile');
 			}
 			return Redirect::to('/change-password');
		}


// public function virtual($username){  
//      	$user_virtual = User::where('username','=',$username);
// 		if($user_virtual->count()){
// 			$user_virtual =$user_virtual->first();
// 			$auth_user=Auth::user()->username;
// 			$user_virtual_username=$user_virtual->username;
// 		    $user_virtual = Virtual::where('user1','=',$user_virtual_username)->where('user2','=',$auth_user);
// 			return View::make('/insertvirtualitem')
// 				->with('user',$user_virtual);
		
// 		    $virtual = new Virtual;
//  	   	 	$virtual->user1=$auth_user;
//  	    	$virtual->user2=$user_virtual->username;;
//  	    	$virtual->send=$user_virtual->send;
//   			$virtual->save();

// 		return App::abort(404);
//     } 
//     $credentials = Input::only('send');
//         if(Auth::attempt($credentials)){
//         return Redirect::to('/sendvirtualsuccess');
//    		 }  	
// }



}
?>
		
		
