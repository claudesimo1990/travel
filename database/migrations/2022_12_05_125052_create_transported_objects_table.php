<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportedObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transported_objects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('bg_color')->default('black');
            $table->string('text_color')->default('white');
            $table->integer('count')->default(1);
            $table->integer('kilo_number')->default(0);
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
        Schema::dropIfExists('transported_objects');
    }
}
