<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('applied_programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('school_program_id')->nullable();
            $table->unsignedBigInteger('college_program_id')->nullable();
            $table->unsignedBigInteger('university_program_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('school_program_id')->references('id')->on('school_programs');
            $table->foreign('college_program_id')->references('id')->on('college_programs');
            $table->foreign('university_program_id')->references('id')->on('university_programs');
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
        Schema::dropIfExists('applied_programs');
    }
}
