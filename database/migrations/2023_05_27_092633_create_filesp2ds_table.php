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
        Schema::create('filesp2ds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('citykab_id');
            $table->foreign('citykab_id')->references('id')->on('citykabs');
            $table->string('title_sp2d');
            $table->string('slug');
            $table->string('file_sp2d');
            $table->date('date');
            $table->text('description');
            $table->bigInteger('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filesp2ds');
    }
};
