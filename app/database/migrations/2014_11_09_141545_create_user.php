<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createuser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table){
            $table->increments('id');
            $table->string('username', 30)->unique()->nullable(false);
            $table->string('password', 65)->nullable(false);
            $table->string('firstname', 30)->unique()->nullable(false);
            $table->string('lastname', 30)->unique()->nullable(false);
            $table->string('age', 20)->nullable(false);
            $table->string('gender', 20)->nullable(false);
            $table->string('work', 30)->nullable(false);
            $table->string('interest', 30)->nullable(false);
            $table->string('tel', 30)->unique()->nullable(false); 
            $table->string('email', 25)->unique()->nullable(false);
            $table->string('facebook', 60)->unique()->nullable(false);
            $table->string('lineid', 30)->unique()->nullable(false); 
            $table->string('code',60)->unique()->nullable(true);
            $table->string('pass',10)->nullable()->nullable(true);
            $table->string('profilepicture',100);
            $table->string('remember_token', 100)->nullable();

             $table->timestamps();
              });

			Schema::create('likes', function($table)
			{
				$table->increments('id');
				$table->string('user1');
				$table->string('user2');
				$table->boolean('addfriend');
				$table->timestamps();

		});
            
            Schema::create('chats', function($table)
			{
				$table->increments('id');
				$table->string('sender');
				$table->string('reciever');
				$table->string('message');
				$table->boolean('read');
				$table->timestamps();

			});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
		Schema::drop('likes');
		Schema::drop('chats');
	}


}