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
        Schema::create('fileapbds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('citykab_id');
            $table->foreign('citykab_id')->references('id')->on('citykabs');
            $table->foreignId('apbd_id')->constrained('apbds')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title_fileapbd');
            $table->string('slug');
            $table->string('file_apbd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fileapbds');
    }
};
