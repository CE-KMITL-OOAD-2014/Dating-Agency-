<?php
	class VirtualItem{

		private $id;
		private $sender;
		private $receiver;
		private $virtualnumber; //ID of virtual item that user salect
		private $read; //user read already or not ???
		
		//constructure function
		public function __construct(){
			$this->id=NULL;
			$this->sender=NULL;
			$this->receiver=NULL;
			$this->virtualnumber=NULL;
			$this->read=0;
		}

		//**************** setting function****************//
		public function setID($value){
			$this->id=$value;
		}
		public function setSender($value){
			$this->sender=$value;
		}
		public function setReceiver($value){
			$this->receiver=$value;
		}
		public function setVirtualnumber($value){
			$this->virtualnumber=$value;
		}	
		public function setRead($value){
			$this->read=$value;
		}
		//**************************************************//

		//*****************getting function****************//
		public function getID(){
			return $this->id;
		}	
		public function getSender(){
			return $this->sender;
		}
		public function getReceiver(){
			return $this->receiver;
		}
		public function getVirtualnumber(){
			return $this->virtualnumber;
		}
		public function getRead(){
			return $this->read;
		}		
		//**************************************************//

		//send virtual item
		public function sendVirtualItem(){
			$new=new VirtualItemRepository();
			$new->id=$this->id;
			$new->sender=$this->sender;
			$new->receiver=$this->receiver;
			$new->virtualnumber=$this->virtualnumber;
			$new->read=0;	
			$new->save();
		}

		//receive virtual item
		public function receiveVirtualItem($username){
			$obj=VirtualItemRepository::all();
            $size=count($obj);
			for($i=0;$i<$size;$i++){  
				if($obj[$i]->receiver == $username)  {
                	$new=VirtualItemRepository::find($obj[$i]->id);
                	$new->read=1;
                	$new->save();
				}    
        	}
		}

		//get all virtual item Object
		public function getAll(){
			$obj=VirtualItemRepository::all();
           	return $obj;	
        }

        //Have virtual item to receive or not??/
		public function hasReceiveVirtual($username){
			$obj=VirtualItemRepository::all();
            $size=count($obj);
			for($i=0;$i<$size;$i++){  
				if($obj[$i]->receiver == $username){
                return $obj;
				}       
        	} return NULL;
		}

	}