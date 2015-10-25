<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogComments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('blog_comments', function(Blueprint $table)
		{
			$table->increments('coid');
			$table->integer('contents_id');//blog_contents 表中的主键cid
			$table->string('author',32);
			$table->integer('authorID');
			$table->string('ip',64);
			$table->text('comment');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('blog_comments', function(Blueprint $table)
		{
			//
		});
	}

}
