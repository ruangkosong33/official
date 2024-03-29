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
        Schema::create('filedownloads', function (Blueprint $table) {
            $table->id();
            $table->string('title_filedownload');
            $table->string('slug');
            $table->string('file_download');
            $table->foreignId('download_id')->constrained('downloads')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filedownloads');
    }
};
