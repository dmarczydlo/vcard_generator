<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',50)->notNullable();
            $table->string('surname',100)->notNullable();
            $table->string('nick',50)->nullable();
            $table->string('email',100)->notNullable();
            $table->string('phone',15)->nullable();
            $table->string('location',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('person');
    }
}
