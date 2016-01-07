<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('devices', function (Blueprint $table) {
			$table->integer('userid')->unsigned();
            $table->bigInteger('androidid');
			$table->primary('androidid');
			$table->integer('valid');
			$table->decimal('version', 2, 2);
			$table->foreign('userid')->references('userid')->on('users');
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
        //
    }
}
