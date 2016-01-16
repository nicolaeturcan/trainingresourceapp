<?php

use App\Training_Resource;
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
            # BAUM columns
            $table->integer('training_resource_parentResourceId')->nullable();
            $table->integer('training_resource_lft')->nullable();
            $table->integer('training_resource_rgt')->nullable();
            $table->integer('training_resource_depth')->nullable();
            # Timestamps
            $table->timestamp(Training_Resource::CREATED_AT);
            $table->timestamp(Training_Resource::UPDATED_AT);
            $table->timestamp('training_resource_deleted_at');
            # User Tracking
            $table->integer('training_resource_created_by');
            $table->integer('training_resource_updated_by');
            $table->integer('training_resource_deleted_by');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('training_resource');
	}

}
