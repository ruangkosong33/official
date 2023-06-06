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
        Schema::create('formationhistorys', function (Blueprint $table) {
            $table->id();
            $table->string('title_formationhistory');
            $table->string('slug');
            $table->longText('description_formationhistory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formationhistorys');
    }
};
