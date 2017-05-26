<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facebook_url',255)->nullable();
            $table->string('twitter_url',255)->nullable();
            $table->string('linkedin_url',255)->nullable();
            $table->string('instagram_url',255)->nullable();
            $table->string('github_url',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('social_media');
    }
}
