<?php

class LikematchTest extends TestCase {
public function testLikematch()
    {
        $user3=new like;
        $user3->setUser_sendlike("user3");
        $user3->setID((DB::table('likes')->max('id'))+1);
        $user3->toLike("user4");
        $like = LikeRepository::find(DB::table('likes')->max('id'));
        $this->assertEquals('user3',$like->user_sendlike);
        $this->assertEquals('user4',$like->user_receivelike);
        $this->assertEquals('0',$like->likematchstate);

        $user4=new like;
        $user4->setUser_sendlike("user4");
        $user4->setID((DB::table('likes')->max('id'))+1);
        $user4->toLike("user3");
        $like = LikeRepository::find(DB::table('likes')->max('id'));
        $this->assertEquals('user4',$like->user_sendlike);
        $this->assertEquals('user3',$like->user_receivelike);
        $this->assertEquals('0',$like->likematchstate);

        $user3->Likematch();
        $user4->Likematch();

        $like = LikeRepository::find((DB::table('likes')->max('id'))-1);
        $this->assertEquals('user3',$like->user_sendlike);
        $this->assertEquals('user4',$like->user_receivelike);
        $this->assertEquals('1',$like->likematchstate);
        $like = LikeRepository::find(DB::table('likes')->max('id'));
        $this->assertEquals('user4',$like->user_sendlike);
        $this->assertEquals('user3',$like->user_receivelike);
        $this->assertEquals('1',$like->likematchstate);
    }
}