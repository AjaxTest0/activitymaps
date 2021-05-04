<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontends', function (Blueprint $table) {
            $table->id();
            $table->string('home_tab_1');
            $table->string('home_tab_2');
            $table->string('our_history');
            $table->string('our_skill');
            $table->string('our_biography');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('google_link');
            $table->string('linkedin_link');
            $table->string('youtube_link');
            $table->string('instagram_link');
            $table->string('pinterest_link');
            $table->text('aboutus');
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
        Schema::dropIfExists('frontends');
    }
}
