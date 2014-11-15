<?php
class UserStatus{

	private $id;
	private $username;
	private $password;
	private $remember_token;
	
	public function __construct(){
		$this->id=NULL;
		$this->username=NULL;
		$this->password=NULL;
		$this->remember_token=NULL;
	}
	public function likes()
	{
		return $this->hasMany('Like');
	}
	public function chats()
	{
		return $this->hasMany('Chat');
	}
	public function virtuals()
	{
		return $this->hasMany('Virtual');
	}
	protected $hidden = array('password', 'remember_token');

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
	public function getId(){
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
	public function saveUser(){
		$new=new User();
		$new->id=$this->id;
		$new->username=$this->username;
		$new->password=$this->password;
		$new->remember_token=$this->remember_token;
		$new->save();
	}			
	public static function getByUsername($id){
		$findID = UserRepository::find($id);
		$new = new UserStatus;
		$new->id=$findID->id;
		$new->username=$findID->username;
		$new->password=$findID->password;
		$new->remember_token=$findID->remember_token;
		return $new;
	}
	public function editUser(){
		$obj=UserRepository::find($this->id);
		$obj->username=$this->username;
		$obj->password=$this->password;
		$obj->remember_token=$this->remember_token;
		$obj->save();
	}

}