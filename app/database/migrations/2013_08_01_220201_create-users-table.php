<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('firstname', 20);
			$table->string('lastname', 20);
			$table->string('email', 100)->unique();
			$table->string('password', 64);
			$table->text('remember_token')->nullable(); // For Laravel 4.2, required for "logout"
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
