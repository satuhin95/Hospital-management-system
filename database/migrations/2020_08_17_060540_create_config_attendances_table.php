<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_attendances', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->tinyInteger('user_type');
            $table->time('in_time');
            $table->time('out_time');
            $table->string('week_day');
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
        Schema::dropIfExists('config_attendances');
    }
}
