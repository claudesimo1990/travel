<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->bigInteger('ref')->unsigned()->unique();
            $table->enum('type', ['TRAVEL', 'PACKS']);
            $table->string('from');
            $table->string('to');
            $table->dateTime('date_from');
            $table->dateTime('date_to');
            $table->longText('content')->nullable();
            $table->integer('kilo');
            $table->integer('price');
            $table->integer('quantity')->nullable();
            $table->string('slug');
            $table->string('company')->nullable();
            $table->longText('objects')->nullable();
            $table->longText('payment')->nullable();
            $table->enum('status', ['PROGRESS', 'ACCEPTED', 'REJECTED']);

            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('posts');
    }
}
