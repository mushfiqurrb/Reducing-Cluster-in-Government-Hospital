<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('relation_id')->index();
            $table->string('patient_id',15)->index();
            $table->string('day')->nullable();
            $table->datetime('date')->nullable();
            $table->time('time')->nullable();
            $table->string('sl_no')->nullable();
            $table->text('msg')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('appoints');
    }
}
