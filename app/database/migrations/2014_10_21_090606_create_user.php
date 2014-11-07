<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration {

      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
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
            $table->string('profilepicture',100)->nullable(false);
            $table->string('remember_token', 100)->nullable();

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
            Schema::drop('users');

      }

}
