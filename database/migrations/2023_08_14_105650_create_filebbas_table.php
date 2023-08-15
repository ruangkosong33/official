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
        Schema::create('filebbas', function (Blueprint $table) {
            $table->id();
            $table->string('title_filebba');
            $table->string('slug');
            $table->string('file_bba');
            $table->date('date');
            $table->string('description');
            $table->string('total');
            $table->foreignId('bba_id')->constrained('bbas')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('citykab_id');
            $table->foreign('citykab_id')->references('id')->on('citykabs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filebbas');
    }
};
