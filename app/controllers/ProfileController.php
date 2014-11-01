<?php
class ProfileController extends BaseController {
	public function user($username){
		$user = User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			return View::make('profile.user')
				->with('user',$user);
		}
		return App::abort(404);
	}

      public function users(){       
      	//$user = User::where('id','=','2');
      	//if($user->username=Auth::user()->username){ $user = User::where('id','=','3');}
 
			return View::make('profile')
				->with('users',User::all());


      	/*
		if($user->count()){
			$user=$user->first();
			return View::make('profile.user')
				->with('user',$user);
		}
		return App::abort(404);*/
    	// return View::make('profile');
		//Redirect::to('/profile/{$user->username}');
    }


}
?>