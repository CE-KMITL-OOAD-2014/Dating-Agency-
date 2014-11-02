<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLike extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('likes', function($table)
			{
				$table->increments('id');
				$table->integer('user_id')->unsigned();
				$table->foreign('user_id')->references('id')->on('users');
				$table->boolean('status1');
				$table->boolean('status2');
				$table->boolean('status3');
				$table->boolean('status4');
				$table->boolean('status5');
				$table->boolean('status6');
				$table->boolean('status7');
				$table->boolean('status8');
				$table->boolean('status9');
				$table->boolean('status10');
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
		Schema::drop('likes');
	}

}
