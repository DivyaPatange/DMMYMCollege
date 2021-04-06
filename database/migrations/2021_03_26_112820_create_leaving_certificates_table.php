<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavingCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaving_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('adm_reg_no')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('page_no')->nullable();
            $table->string('tc_no')->nullable();
            $table->string('name')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('caste')->nullable();
            $table->string('session_from')->nullable();
            $table->string('session_to')->nullable();
            $table->string('leave_on')->nullable();
            $table->string('leave_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('dob')->nullable();
            $table->string('class')->nullable();
            $table->string('year')->nullable();
            $table->string('enroll_class')->nullable();
            $table->string('prn_no')->nullable();
            $table->string('performance')->nullable();
            $table->string('total_fee')->nullable();
            $table->string('reason_leaving')->nullable();
            $table->string('remark')->nullable();
            $table->string('date')->nullable();
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
        Schema::dropIfExists('leaving_certificates');
    }
}
