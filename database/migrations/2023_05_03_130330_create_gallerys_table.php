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
        Schema::create('gallerys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categorys');
            $table->string('title_gallery');
            $table->string('slug');
            $table->string('image_gallery');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallerys');
    }
};
