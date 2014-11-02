<?php

class Testlike extends TestCase {

    public function like()
    {
    	$userlike = new Sendlike(array('bow','nan','boss'));
    	//true
    	$this->assertTrue($userlike->tolike('bow')); 
    	$this->assertTrue($userlike->tolike('nan')); 
    	$this->assertTrue($userlike->tolike('boss')); 
    	//false
        $this->assertTrue($userlike->tolike('ken')); 
    	$this->assertTrue($userlike->tolike('sun')); 
    	$this->assertTrue($userlike->tolike('bank')); 

    }

}
