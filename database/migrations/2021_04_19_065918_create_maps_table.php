<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maps', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('proponent');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->date('fromdate');
            $table->date('todate');
            $table->string('description');
            $table->decimal('latitude', 12,7);
            $table->decimal('longitude', 12,7);
            $table->string('color');
            $table->boolean('public')->default(0);
            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade');;
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
        Schema::dropIfExists('maps');
    }
}
