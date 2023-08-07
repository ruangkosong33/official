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
        Schema::create('filebbhs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bbh_id');
            $table->foreign('bbh_id')->references('id')->on('bbhs');
            $table->unsignedBigInteger('citykab_id');
            $table->foreign('citykab_id')->references('id')->on('citykabs');
            $table->string('title_filebbh');
            $table->string('slug');
            $table->string('file_bbh');
            $table->date('date');
            $table->string('description');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filebbhs');
    }
};
