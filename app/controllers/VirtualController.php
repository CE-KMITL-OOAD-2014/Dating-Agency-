<?php
class VirtualController extends BaseController {
	public function virtual($username){
		return View::make('virtualItem.virtualitem');
	}

	public function sendvirtual($username,$virtualid){
		 $user_recieve = User::where('username','=',$username);
		if($user_recieve->count()){
			$user_recieve=$user_recieve->first();
    			$virtual = new Virtual();
    			$virtual->sender=Auth::user()->username;
    			$virtual->reciever=$user_recieve->username;
    			$virtual->virtual = $virtualid;
    			$virtual->read=0;
 				$virtual->save();
	    
    			 return View::make('virtualItem.sendvirtualsuccess', array('virtual'=> $virtual,'sender' => Auth::user()))
						->with('reciever',$user_recieve);
    		
		}
		return App::abort(404);
	}

	public function recieve_virtual(){
	 	$reciever = Auth::user();
	 	$virtual=Virtual::where('reciever','=',$reciever->username);
    	if($virtual->count()){
    		//Chat::where('read','=','1')->delete();
    		Virtual::where('reciever','=',$reciever->username)->where('read','=','0')->update(array('read'=>1));
    		return View::make('virtualItem.recieve-virtual', array('virtuals' => Virtual::All(),'user'=>$reciever));
    	}
    	return View::make('virtualItem.no-virtual');
	}

}
?>