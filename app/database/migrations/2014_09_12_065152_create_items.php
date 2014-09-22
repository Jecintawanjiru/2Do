<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItems extends Migration {

	
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('owner_id');
			$table->string('name');
			$table->boolean('done');
			$table->timestamps();
			
		});
	}

	public function down()
	{
		Schema::drop('items');
		
	
	}

}

