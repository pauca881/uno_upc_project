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
        Schema::create('tpartidas', function (Blueprint $table) {
            $table->id()->primary();
            $table->integer('score');
            $table->unsignedBigInteger('id_player')->index();

            $table->foreign('id_player')->references('id')->on('tplayers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpartidas');
    }
};
