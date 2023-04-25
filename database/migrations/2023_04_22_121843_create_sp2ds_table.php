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
        Schema::create('sp2ds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city')->constrained('citys');
            $table->string('title_sp2d');
            $table->string('slug');
            $table->string('file_sp2d');
            $table->date('date');
            $table->text('description');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp2ds');
    }
};
