<?php
	class Like{

		private $id;
		private $user_sendlike; //user that like other user
		private $user_receivelike; //user that be liked
		private $likematchstate; //like together
		
		//constructure function
		public function __construct(){
			$this->id=NULL;
			$this->user_sendlike=NULL;
			$this->user_receivelike=NULL;
			$this->likematchstate=0;
		}

		//**************** setting function ***********//
		public function setID($value){
			$this->id=$value;
		}
		public function setUser_sendlike($value){
			$this->user_sendlike=$value;
		}
		public function setUser_receivelike($value){
			$this->user_receivelike=$value;
		}
		public function setLikematchstate($value){
			$this->likematchstate=$value;
		}	
		//**********************************************//

		//************** getting funnction *************//
		public function getID(){
			return $this->id;
		}	
		public function getUser_sendlike(){
			return $this->user_sendlike;
		}
		public function getUser_receivelike(){
			return $this->user_receivelike;
		}
		public function getLikematchstate(){
			return $this->likematchstate;
		}
		//************************************************//

		//to check $user_like like $user_receive or not ???	
		//if like ,return in Object
		public function isLike($user_like,$user_receive){
			$obj=LikeRepository::all();
            $size=count($obj);
			for($i=0;$i<$size;$i++){  
				if($obj[$i]->user_sendlike == $user_like && $obj[$i]->user_receivelike == $user_receive)  {
				$new=new Like;
                $new->id=$obj[$i]->id;
                $new->user_sendlike=$obj[$i]->user_sendlike;
                $new->user_receivelike=$obj[$i]->user_receivelike;
                $new->likematchstate=$obj[$i]->likematchstate;
                return $new;
				}       
        	} return NULL;
		}

		//like function -> set up database
		public function like(){
			$new=new LikeRepository();
			$new->id=$this->id;
			$new->user_sendlike=$this->user_sendlike;
			$new->user_receivelike=$this->user_receivelike;
			$new->likematchstate=$this->likematchstate;
			$new->save();
		}

		// search Like Object by ID
		public static function getByID($id){
			$findID=LikeRepository::find($id);
			$new=new Like;
			$new->id=$findID->id;
			$new->user_sendlike=$findID->user_sendlike;
			$new->user_receivelike=$findID->user_receivelike;
			$new->likematchstate=$findID->likematchstate;
			return $new;
		}

		//when like together
		public function Likematch(){
			$obj=LikeRepository::find($this->id);
			$obj->likematchstate=1;
			$obj->save();
		}

		//dislike function
		public function dislike(){
			$obj=LikeRepository::find($this->id);
			$obj->delete();
		}

		//get all Like Object
		public function getAll(){
			$obj=LikeRepository::all();
           	return $obj;	
        }

        //get number of Like Object
		public function getsizeRepository(){
			$obj=LikeRepository::all();
            $size=count($obj);
            return $size;
		}

		// like user that username = $username
		public function toLike($username){
			$new=new LikeRepository();
			$new->id=$this->id;
			$new->user_sendlike=$this->user_sendlike;
			$new->user_receivelike=$username;
			$new->likematchstate=$this->likematchstate;
			$new->save();
		}

	}