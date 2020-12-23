<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipCompletionYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship_completion_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('internship_completion_id');
            $table->foreign('internship_completion_id')->references('id')->on('internship_completions')->onDelete('cascade');
            $table->string('internship_season');
            $table->string('internship_year');
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
        Schema::dropIfExists('internship_completion_years');
    }
}
