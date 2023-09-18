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
        Schema::create('filerecaps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recap_id');
            $table->foreign('recap_id')->references('id')->on('recaps');
            $table->string('title_filerecap');
            $table->string('slug');
            $table->string('file_recap')->nulllable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filerecaps');
    }
};
