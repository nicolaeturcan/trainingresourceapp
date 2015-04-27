<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingResourceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('training_resource', function(Blueprint $table)
		{
            $table->increments('training_resource_id');
            $table->string('training_resource_name');
            $table->string('training_resource_short_name');
            $table->string('training_resource_description');
            $table->string('training_resource_thumbnail');
            $table->string('training_resource_external_url');
            $table->integer('training_resource_parentResourceId');
            $table->dateTime('training_resource_entryDate');
            $table->dateTime('training_resource_last_update');
            $table->integer('training_resource_creationUserId');
            $table->integer('training_resource_lastupdateUserId');
            $table->boolean('training_resource_softDeleted');
            $table->dateTime('training_resource_softDeletedDate');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('training_resource', function(Blueprint $table)
		{
			//
		});
	}

}
