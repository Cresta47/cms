<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeCourseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_course', function (Blueprint $table) {
            $table->increments('user_section_id');
            $table->integer('grade_id')->unsigned();
            $table->foreign('grade_id')->references('grade_id')->on('grade');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grade_course');
    }
}
