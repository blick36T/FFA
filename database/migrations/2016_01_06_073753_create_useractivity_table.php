<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseractivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('useractivity', function (Blueprint $table) {
			$table->integer('userid')->unsigned();
			$table->integer('act_typeid');
			$table->bigInteger('autoid')->unique();
			$table->primary('autoid');
			$table->string('reference');
			$table->decimal('latitiude', 2, 2);
			$table->decimal('longitude', 2, 2);
			$table->integer('battery');
			$table->bigInteger('starttime');
			$table->bigInteger('endtime');
			$table->string('address');
			$table->foreign('userid')->references('userid')->on('users');
			$table->foreign('act_typeid')->references('act_typeid')->on('activitytype');
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
