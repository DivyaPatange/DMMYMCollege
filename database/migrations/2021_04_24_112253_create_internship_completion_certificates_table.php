<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipCompletionCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship_completion_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_no');
            $table->date('dated');
            $table->string('name');
            $table->string('course');
            $table->string('exam_session');
            $table->string('exam_year');
            $table->string('prn_no');
            $table->string('pro_reg_no');
            $table->string('intern_duration');
            $table->string('days');
            $table->date('from_date');
            $table->date('to_date');
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
        Schema::dropIfExists('internship_completion_certificates');
    }
}
