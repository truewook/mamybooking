<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccessTypeTable extends Migration {

	public function up()
	{
		Schema::create('access_type', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 30);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('access_type');
	}
}