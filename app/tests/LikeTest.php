<?php 

class LikeTest extends TestCase { 

    public function testlike()
    {
        $user1=new like;
        $user1->setUser_sendlike("user1");
        $user1->toLike("user2");
        $like = LikeRepository::find(DB::table('likes')->max('id'));
        $this->assertEquals('user1',$like->user_sendlike);
        $this->assertEquals('user2',$like->user_receivelike);
        $this->assertEquals('0',$like->likematchstate);
    }

     public function testIslike()
    {
        $user1 = new Like();
        $test=$user1 ->Islike("user1","user2");
    }

     

}
