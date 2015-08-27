<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bd extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('main_page',function($table){
            $table->increments('id');
            $table->timestamp();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->char('h1');
            $table->text('text');
            $table->char('first_circle_text');
            $table->char('second_circle_text');
            $table->char('third_circle_text');
            $table->int('first_circle_num');
            $table->int('second_circle_num');
            $table->int('third_circle_num');
        });

        Schema::create('vacancy_page',function($table){
            $table->increments('id');
            $table->timestamp();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->text('text');
        });

        Schema::create('vacancy',function($table){
            $table->increments('id');
            $table->timestamp();
            $table->char('name');
            $table->text('requirements');
            $table->text('duties');
            $table->text('conditions');
        });

        Schema::create('news', function($table){
            $table->increments('id');
            $table->timestamp();
            $table->char('title');
            $table->text('short');
            $table->text('full');
            $table->char('image');
        });

        Schema::create('news_page',function($table){
            $table->increments('id');
            $table->timestamp();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
        });

        Schema::create('projects_page',function($table){
            $table->increments('id');
            $table->timestamp();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
        });

        Schema::create('project', function($table){
            $table->increments('id');
            $table->timestamp();
            $table->char('title');
            $table->text('short');
            $table->text('full');
            $table->char('image');
        });

        Schema::create('pages', function($table){
            $table->increments('id');
            $table->timestamp();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->text('text');
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
	}

}
