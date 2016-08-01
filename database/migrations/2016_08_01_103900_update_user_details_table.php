<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {


            $table->string('first_name');
            $table->string('last_name');
            $table->string('temp_address');
            $table->string('permanent_address');
            $table->string('contact');
            $table->string('username');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {


            $table->dropColumn('first_name','last_name','temp_address','permanent_address','contact','username');

        });
    }
}
