<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {

            $table->uuid('id')->primary();

            $table->string('full_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('street')->nullable();
            $table->string('phone')->nullable();
            $table->string('birthday')->nullable();

            $table->text('about')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('google')->nullable();
            $table->text('linkedin')->nullable();

            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
}
