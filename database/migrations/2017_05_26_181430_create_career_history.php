<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_history', function (Blueprint $table) {
            $table->increments('id');
            $table->date('work_start')->notNullable();
            $table->date('work_end')->nullable();
            $table->boolean('still_working')->default(false);
            $table->string('company')->notNullable();
            $table->string('job_title',255)->notNullable();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('career_history');
    }
}
