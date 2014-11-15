<?php

//control all about send/receive virtual item
class VirtualController extends BaseController {

	//send virtual item view
	public function virtual($username){
		return View::make('virtualItem.virtualitem');
	}

	//send virtual item
	public function sendvirtual($username,$virtualnumber){
		//update database
		$user_receive = User::where('username','=',$username);
		if($user_receive->count()){
			$user_receive=$user_receive->first();
    		$virtual = new VirtualItem;
    		$virtual->setSender(Auth::user()->username);
    		$virtual->setReceiver($user_receive->username);
    		$virtual->setVirtualnumber($virtualnumber);  //virtual item id that user selected
 			$virtual->sendVirtualItem();
    		return View::make('virtualItem.sendvirtualsuccess')
    		->with(array("sender"=>Auth::user()->username,
                "receiver"=>$user_receive->username,
                "virtualnumber"=>$virtualnumber
                ));
		}
		return App::abort(404);
	}

	//show virtual item that user receive
	public function receive_virtual(){
	 	$receiver = Auth::user();
	 	$virtual = new VirtualItem;
	 //	$allvirtual = $virtual->getAll();
	 	$allvirtual = $virtual->hasReceiveVirtual(Auth::user()->username);
	 	//$virtual=Virtual::where('receiver','=',$receiver->username);
    	if($allvirtual!=NULL){
    		//update database to read
    		//read=1 mean user read
    		$virtual->receiveVirtualItem(Auth::user()->username);
    		//Virtual::where('receiver','=',$receiver->username)->where('read','=','0')->update(array('read'=>1));
    		return View::make('virtualItem.receive-virtual')->with('virtuals',$allvirtual)
    		->with(array("username"=>Auth::user()->username));
    	}
    	return View::make('virtualItem.no-virtual');
	}

}
?>