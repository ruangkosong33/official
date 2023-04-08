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
        Schema::table('citys', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('apbd_id')->after('slug');
            $table->foreign('apbd_id')->references('id')->on('apbds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('citys', function (Blueprint $table) {
            //
        });
    }
};
