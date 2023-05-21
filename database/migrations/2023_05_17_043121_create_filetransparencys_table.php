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
        Schema::create('filetransparencys', function (Blueprint $table) {
            $table->id();
            $table->string('title_filetransparency');
            $table->string('slug');
            $table->string('file_transparency');
            $table->foreignId('transparency_id')->constrained('transparencys')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filetransparencys');
    }
};
