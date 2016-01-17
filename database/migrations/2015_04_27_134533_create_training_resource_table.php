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
		Schema::create('training_resources', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('short_name');
            $table->string('description');
            $table->string('thumbnail');
            $table->string('external_url');
            # BAUM columns
            $table->integer('parent_id')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();
            # Timestamps
            $table->timestamps();
            $table->softDeletes();
            # User Tracking
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->integer('deleted_by');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('training_resources');
	}

}
