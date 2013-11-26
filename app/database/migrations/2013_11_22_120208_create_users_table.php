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
		Schema::create('passports',function($table){
			$table->string('id',50)->unique();
			$table->string('password',32);
			$table->string('salt',10);
			$table->string('email',50);
			$table->smallInteger('uid_amount');
			$table->smallInteger('available_uid_amount');
			$table->timestamp('last_login_time');
			$table->string('last_login_IP',15);
			$table->string('active_IP',15);
			$table->string('zjutmail',50);
			$table->smallInteger('type');
			$table->smallInteger('active');
			$table->smallInteger('admin');
			$table->timestamps();
		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('passports');
	}

}