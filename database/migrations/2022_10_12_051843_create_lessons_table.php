<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('title');
            $table->text('overview')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(true);
            $table->string('image')->nullable();
            $table->integer('index')->default(0);
            $table->boolean('recommended')->default(false);
            $table->boolean('paid')->default(false);
            $table->enum('level', ['Beginner', 'Intermediate', 'Advanced']);
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
        Schema::dropIfExists('lessons');
    }
};
