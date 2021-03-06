<?php
class UserStatus{

	private $id;
	private $username;
	private $password;
	private $remember_token;

	//constructure function
	public function __construct(){
		$this->id=NULL;
		$this->username=NULL;
		$this->password=NULL;
		$this->remember_token=NULL;
	}

	//**************setting function**********//
	public function setId($value){
		$this->id=$value;
	}
	public function setUsername($value){
		$this->username=$value;
	}
	public function setPassword($value){
		$this->password=$value;
	}
	public function setRemember_token($value){
		$this->remember_token=$value;
	}		
	//******************************************//

	//******************getting function***********//
	public function getID(){
		return $this->id;
	}
	public function getUsername(){
		return $this->username;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getRemember_token(){
		return $this->remember_token;
	}	
	//************************************************//

	//save to database
	public function saveUser(){
		$new=new User();
		$new->id=$this->id;
		$new->username=$this->username;
		$new->password=$this->password;
		$new->remember_token=$this->remember_token;
		$new->save();
	}

	//search by ID			
	public static function getByID($id){
		$findID = UserRepository::find($id);
		$new = new UserStatus;
		$new->id=$findID->id;
		$new->username=$findID->username;
		$new->password=$findID->password;
		$new->remember_token=$findID->remember_token;
		return $new;
	}

	//search by username
	public static function getByUsername($username){
		$find = UserRepository::all();
		$size=count($find);
		for($i=0;$i<$size;$i++){ 
			if($find[$i]->username==$username){
				$new = new UserStatus;
				$new->id=$find[$i]->id;
				$new->username=$find[$i]->username;
				$new->password=$find[$i]->password;
				$new->remember_token=$find[$i]->remember_token;
				return $new;
			}
		}
	}

	//edit data
	public function editUser(){
		$obj=UserRepository::find($this->id);
		$obj->username=$this->username;
		$obj->password=$this->password;
		$obj->remember_token=$this->remember_token;
		$obj->save();
	}

}