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
        Schema::create('filesks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sk_id');
            $table->foreign('sk_id')->references('id')->on('sks');
            $table->string('title_filesk');
            $table->string('slug');
            $table->string('file_sk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filesks');
    }
};
