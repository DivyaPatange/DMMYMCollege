<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfflineInternshipWorkDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offline_internship_work_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('offline_id');
            $table->foreign('offline_id')->references('id')->on('offline_internships')->onDelete('cascade');
            $table->string('schedule');
            $table->string('duration');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('oriattationPrgmCollegeName');
            $table->string('place');
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
        Schema::dropIfExists('offline_internship_work_details');
    }
}
