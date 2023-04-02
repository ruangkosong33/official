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
        Schema::create('filesops', function (Blueprint $table) {
            $table->id();
            $table->string('name_filesop');
            $table->string('slug');
            $table->string('file_sop');
            $table->foreignId('sop_id')->constrained('sops')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filesops');
    }
};
