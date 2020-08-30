<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientadmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('patientadmissions', function (Blueprint $table) {
            $table->id();
            $table->float('admission_fee');
            $table->integer('bed_id');
            $table->integer('patient_id');
            $table->date('admission_date');
            $table->date('release_date');
            $table->string('reference_doctor',50);
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
        Schema::dropIfExists('patientadmissions');
    }
}
