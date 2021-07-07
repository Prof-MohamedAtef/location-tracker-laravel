<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DevicesLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('version')->nullable();
			$table->text('brand')->nullable();
			$table->text('model')->nullable();
			$table->text('battery')->nullable();
			$table->text('uuid')->nullable();
            $table->text('lat')->default(0.00);
            $table->text('long')->default(0.00);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('devices');
    }
}
