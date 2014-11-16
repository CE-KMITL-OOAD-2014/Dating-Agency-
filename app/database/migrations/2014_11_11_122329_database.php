<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Database extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		//
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('username', 30)->unique()->nullable(false);
			$table->string('password', 65)->nullable(false);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});
		Schema::create('profiles', function($table){
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('firstname', 30)->unique()->nullable(false);
			$table->string('lastname', 30)->nullable(false);
			$table->string('age', 20)->nullable(false);
			$table->string('gender', 20)->nullable(false);
			$table->string('work', 30)->nullable(false);
			$table->string('interest', 30)->nullable(false);
			$table->string('tel', 30)->nullable(false); 
			$table->string('email', 25)->nullable(false);
			$table->string('facebook', 60)->nullable(false);
			$table->string('lineid', 30)->nullable(false); 
			$table->timestamps();
		});

		Schema::create('profilePictures', function($table){
			$table->increments('id');
			$table->integer('profile_id')->unsigned();
			$table->string('profilepicture',100);
			$table->timestamps();
		});
		Schema::create('likes', function($table)
		{
			$table->increments('id');
			$table->string('user_sendlike');
			$table->string('user_receivelike');
			$table->boolean('likematchstate');
			$table->timestamps();

		});

		Schema::create('chatboxs', function($table)
		{
			$table->increments('id');
			$table->string('sender');
			$table->string('receiver');
			$table->timestamps();

		});
		
		Schema::create('messages', function($table)
		{
			$table->increments('id');
			$table->integer('chatbox_id')->references('id')->on('chatboxs');;
			$table->string('sender');
			$table->string('receiver');
			$table->string('message');
			$table->boolean('read');
			$table->timestamps();

		});

		Schema::create('virtuals', function($table)
		{
			$table->increments('id');
			$table->string('sender');
			$table->string('receiver');
			$table->integer('virtualnumber');
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
		Schema::drop('profiles');
		Schema::drop('profilePictures');
		Schema::drop('likes');
		Schema::drop('chatboxs');
		Schema::drop('messages');
		Schema::drop('virtuals');

	}

}
