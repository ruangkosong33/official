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
        Schema::create('filelaws', function (Blueprint $table) {
            $table->id();
            $table->string('title_filelaw');
            $table->string('slug');
            $table->string('file_filelaw');
            $table->foreignId('law_id')->constrained('laws')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filelaws');
    }
};
