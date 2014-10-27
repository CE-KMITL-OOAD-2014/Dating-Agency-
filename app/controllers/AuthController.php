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
		

    // Input::file('profilepicture')->move(base_path() . '/storage/picture');
    // $profilepicture = new profilepicture();
    // $profilepicture->path = 'picture/' . Input::file('profilepicture')->getClientOriginalName();

	// 	if(Input::hasfile('profilepicture')){
	// 		$des = 'storage/picture';
	//         $profilepicture = str_random(6).'_'.Input::get('profilepicture')->getClientOriginalName();
	// 	    Input::file('profilepicture')->move($des,$profilepicture);
	// }


		// var_dump(Input::file('profilepicture'));
		// $profilepicture = Input::file('profilepicture');
		// $filename = $profilepicture->getClientOriginalName();
  //       $user->profilepicture = $filename;
 //       $user->saveflag = $user->save();
	    $user->save();
        $credentials = Input::only('username', 'password');
        if(Auth::attempt($credentials)){
        return Redirect::to('/showprofile');
    }
        	
    }
}    
?>
		
		
