<?php
	class Chat{
		private $id;
		private $sender;
		private $receiver;
		
		//constucter function
		public function __construct(){

			$this->id=NULL;
			$this->sender=NULL;
			$this->receiver=NULL;
		}

		//********* setting function ***********//
		public function setID($value){
			$this->id=$value;
		}
		public function setSender($value){
			$this->sender=$value;
		}
		public function setReceiver($value){
			$this->receiver=$value;
		}
		//***************************************//

		//**********getting function ************//
		public function getID(){
			return $this->id;
		}	
		public function getSender(){
			return $this->sender;
		}
		public function getReceiver(){
			return $this->receiver;
		}
		//****************************************//

		//relation with class Message
		public function messages()
		{
			return $this->hasMany('Message');
		}

		//Find chatbox
		public function getChatbox(){
			$obj=ChatRepository::all();
            $size=count($obj);
			for($i=0;$i<$size;$i++){  
				if(($obj[$i]->sender == $this->sender&& $obj[$i]->receiver == $this->receiver)||
					($obj[$i]->sender ==  $this->receiver&& $obj[$i]->receiver == $this->sender))  {
                	$chatbox= new Chat;
                	$chatbox->id=$obj[$i]->id;
                	$chatbox->sender=$obj[$i]->sender;
					$chatbox->receiver=$obj[$i]->receiver;
                	return $chatbox;
				}    
        	}
        	return NULL;
		}

		// save to database
		public function createChatbox(){
			$new=new ChatRepository();
			$new->id=$this->id;
			$new->sender=$this->sender;
			$new->receiver=$this->receiver;
			$new->save();
		}

		public function deletechatbox(){
			$obj=ChatRepository::find($this->id);
			$obj->delete();
		}
	   
	    // get all message
		public function getMessageAll(){
			$message= new message;
			$state=$message->hasMessage();
			if($state==1){
				$obj=MessageRepository::all();
				return $obj;
			}
			else return NULL;
			/*$obj=MessageRepository::all();
			if($obj==NULL){
				return NULL;
			}
			return $obj;*/	
        }

        //after read message -> set up database
		public function toRead(){
			$message=new message;
			$message->setReceiver($this->receiver);
			$message->toRead();
		}


	}