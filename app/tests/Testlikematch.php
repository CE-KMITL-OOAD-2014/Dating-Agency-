<?php 

class Testlikematch extends TestCase { 

    public function likematching()
    {
        $userlikesend = new likepresssend(array('bow','nan','boss'));
        $this->assertTrue($userlikesend->tolike('bow')); 
        $this->assertTrue($userlikesend->tolike('nan')); 
        $this->assertTrue($userlikesend->tolike('boss')); 
    
        $userlikerecieve = new likepressrecieve(array('bow','sun','bank'));
        $this->assertTrue($userlikesend->tolike('bow')); 
        $this->assertTrue($userlikesend->tolike('sun')); 
        $this->assertTrue($userlikesned->tolike('bank')); 

    }


    public function matchinglikestatus()
    {
        $this->assertEquals($userlikesend,$userreceive);
    }

}
