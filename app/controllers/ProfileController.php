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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
 		}


public function like($username){
		$user_like = User::where('username','=',$username);
		if($user_like->count()){
			$user_like=$user_like->first();
			return View::make('profile.like', array('user' => Auth::user()))
				->with('user_like',$user_like);
		}
		return App::abort(404);
    }

<<<<<<< HEAD
=======
=======
>>>>>>> origin/master
>>>>>>> origin/master


      	/*
		if($user->count()){
			$user=$user->first();
			return View::make('profile.user')
				->with('user',$user);
		}
		return App::abort(404);*/
    	// return View::make('profile');
		//Redirect::to('/profile/{$user->username}');
<<<<<<< HEAD
   
=======
<<<<<<< HEAD
   
=======
    }

>>>>>>> origin/master
>>>>>>> origin/master

}
?>