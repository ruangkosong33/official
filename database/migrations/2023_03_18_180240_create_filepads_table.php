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
        Schema::create('filepads', function (Blueprint $table) {
            $table->id();
            $table->string('title_filepad');
            $table->string('slug');
            $table->string('file_pad');
            $table->foreignId('pad_id')->constrained('pads')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filepads');
    }
};
