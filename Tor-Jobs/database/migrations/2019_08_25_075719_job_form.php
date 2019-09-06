<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobform', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jobtitle');
            $table->string('company_name');
            $table->string('company_website');
            $table->string('location');
            $table->string('working_hours');
            $table->string('jobtype');
            $table->string('jobcategory');
            $table->string('closing_date');
            $table->string('application_notify_email');
            $table->string('salary_offer');
            $table->string('experience_level');
            $table->string('total_years');
            $table->string('academic_degree');
            $table->string('dress_code');
            $table->mediumText('job_description');
            $table->mediumText('company_description');
            $table->string('cover_image');
            $table->string('cover_image2');
            $table->string('company_logo');
            $table->string('google');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('linkedin');
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
        Schema::dropIfExists('jobform');
    }
}
