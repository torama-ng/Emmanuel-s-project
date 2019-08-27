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
            $table->string('companyname');
            $table->string('location');
            $table->string('schedule');
            $table->string('requirements');
            $table->mediumText('description');
            $table->string('users_image');
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
