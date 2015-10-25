<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('blog_users', function(Blueprint $table)
		{
			$table->increments('uid');
			$table->string('name',32);
			$table->string('email',200)->unique();
			$table->string('password',64);
			$table->rememberToken();
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
		Schema::table('blog_users', function(Blueprint $table)
		{
			//
		});
	}

}
