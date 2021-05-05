<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_maps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admin_id')->unsigned();
            $table->bigInteger('maps_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('maps_id')->references('id')->on('maps')->onDelete('cascade');
            // $table->bigInteger('admin_id')->constrained('admins');
            // $table->foreignId('admin_id')->constrained('admins');
            // $table->foreignId('maps_id')->constrained('maps');
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
        Schema::dropIfExists('admin_maps');
    }
}
