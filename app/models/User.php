<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

  	//validation
	public static function validate($input){
		$rules=array(
			'username'=>'Required|Between:3,20|Unique:users',
			'password' =>'Required|Between:4,8|Confirmed',
			'password_confirmation'=>'Required|Between:4,8',
			'firstname'=>'Required|Between:3,30|Unique:profiles',
			'lastname'=>'Required|Between:3,30',
			'age'=>'Required|Alpha_num',
			'gender'=>'Required',
			'work'=>'Required',
			'interest'=>'Required|Between:3,60',
			'tel'=>'Required',
			'email'=>'Required|Email',
			'facebook'=>'Required',
			'lineid'=>'Required',
			'profilepicture'=>'Required'
			);
		$message = array(
			'username.required'=>'please insert username.',
			'password.min'=>'password must be 4-8 character',
			'confirmed'=>'confirm password unsuccess'
			);
		return Validator::make($input,$rules,$message);
	}
	
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getReminderUser()
	{
		return $this->user;
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}
}
