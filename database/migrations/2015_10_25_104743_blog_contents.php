<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogContents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('blog_contents', function(Blueprint $table)
		{
			$table->increments('cid');
			$table->string('title',100);
			$table->text('content');
			$table->string('status',20);
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
		Schema::table('blog_contents', function(Blueprint $table)
		{
			//
		});
	}

}
