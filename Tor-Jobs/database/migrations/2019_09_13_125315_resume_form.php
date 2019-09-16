<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResumeForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('education_school');
            $table->string('education_qualification');
            $table->string('education_date');
            $table->mediumtext('education_note');

            $table->string('experience_employer');
            $table->string('experience_job');
            $table->string('experience_date');
            $table->mediumtext('experience_note');

            $table->string('skill_name');
            $table->string('skill_percent');
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
