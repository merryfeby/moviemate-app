<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('studio', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('locationID');
            $table->string('name');
            $table->integer('capacity');
            $table->tinyInteger('status')->default(1);
            $table->foreign('locationID')->references('id')->on('location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studio');
    }
};
