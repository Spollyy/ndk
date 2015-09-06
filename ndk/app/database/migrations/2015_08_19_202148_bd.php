<?php

use Illuminate\Database\Schema\Blueprinteger;
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
            $table->timestamps();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->char('h1');
            $table->text('text');
            $table->char('first_circle_text');
            $table->char('second_circle_text');
            $table->char('third_circle_text');
            $table->integer('first_circle_num');
            $table->integer('second_circle_num');
            $table->integer('third_circle_num');
        });

        Schema::create('vacancy_page',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->text('text');
        });

        Schema::create('vacancy',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('name');
            $table->text('requirements');
            $table->text('duties');
            $table->text('conditions');
        });

        Schema::create('news', function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->text('short');
            $table->text('full');
            $table->char('image');
        });

        Schema::create('news_page',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
        });

        Schema::create('projects_page',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->char('image');
            $table->text('text');
        });

        Schema::create('project', function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->text('short');
            $table->text('full');
            $table->char('image');
            $table->integer('cat_id');
        });

        Schema::create('projects_cat',function ($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('name');
        });

        Schema::create('pages', function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->text('text');
        });

        Schema::create('services_page',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->char('image');
            $table->text('text');
        });

        Schema::create('service', function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->text('short');
            $table->text('full');
            $table->char('image');
            $table->integer('cat_id');
        });

        Schema::create('service_cat',function ($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('name');
        });

        Schema::create('tech_page',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->char('image');
            $table->text('text');
        });

        Schema::create('tech_cat',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('name');
            $table->char('image');
            $table->text('text');
        });

        Schema::create('tech_subcat',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('name');
            $table->char('image');
            $table->text('text');
            $table->integer('cat_id');
        });

        Schema::create('tech_pointeger',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('name');
            $table->char('image');
            $table->text('description');
            $table->text('longtext');
            $table->integer('subcat_id');
        });

        Schema::create('users',function($table){
            $table->increments('id');
            $table->timestamps();
            $table->char('login');
            $table->char('pwd');
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
